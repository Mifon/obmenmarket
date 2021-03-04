// Привязка/Отвязка к событиям PLUpload

const TicketsHandle = (isBind) => {
  const localHostHref = new RegExp("http://127.0.0.1:5500/");

  const addPhotoLipFrog = () => {
    const container = document.querySelector("#ticket-files-list");
    const select = document.querySelector("#ticket-files-select");
    container.append(select);
  };

  const firesOnUpload = (up, f) => {
    addPhotoLipFrog();
    ticketFileMetaBeatutify();
    console.log(f);
  };
  const firesOnRemove = (up, f) => {
    console.log(f);
    f.forEach((el) => el.destroy());
    up.refresh();
  };

  const eventBinders = () => {
    Tickets.Uploader.bind("FileUploaded", firesOnUpload);
    Tickets.Uploader.bind("FilesRemoved", firesOnRemove);
  };
  const eventUnbinders = () => {
    Tickets.Uploader.unbind("FileUploaded", firesOnUpload);
    Tickets.Uploader.unbind("FilesRemoved", firesOnRemove);
  };

  if (!localHostHref.test(window.location.href)) {
    isBind ? eventBinders() : eventUnbinders();
  }
};

// алгоритм одинаковой высоты элементов в лотах

const matchHeight = () => {
  const lothold = document.querySelector(".lothold");
  const allLots = document.querySelectorAll(".lothold__card");
  const allTtls = document.querySelectorAll(".lothold__card-ttl");
  const allTxts = document.querySelectorAll(".lothold__card-txt");

  const matchAlg = (col) => {
    const evenedLotsQty = Math.floor(allLots.length / 2) * 2;
    let cnt = 0;
    for (let i = cnt; i < cnt + col; i++) {
      if (cnt < evenedLotsQty) {
        let maxTtlH = Math.max(
          ...[allTtls[cnt].clientHeight, allTtls[cnt + 1].clientHeight]
        );
        let maxTxtH = Math.max(
          ...[allTxts[cnt].clientHeight, allTxts[cnt + 1].clientHeight]
        );
        allTtls[cnt].style.height = `${maxTtlH}px`;
        allTtls[cnt + 1].style.height = `${maxTtlH}px`;
        allTxts[cnt].style.height = `${maxTxtH}px`;
        allTxts[cnt + 1].style.height = `${maxTxtH}px`;
        cnt += col;
      }
    }
  };

  const flow = () => {
    const lotWidth = allLots.length === 0 ? 1 : allLots[0].clientWidth;
    let col = Math.floor(lothold.clientWidth / lotWidth);
    allTtls.forEach((ttl) => (ttl.style.height = `fit-content`));
    allTxts.forEach((txt) => (txt.style.height = `fit-content`));
    col > 1 && col < 3 ? (col = 2) : (col = 1);
    col > 1 && col < 3 && matchAlg(col);
  };

  lothold && allLots && allTtls && allTxts && flow();
};

// выравнивает контент в карточках лотов
//(запуск алгоритма при стпрте приложения)

function runMatchHeight() {
  document.querySelector(".lothold") !== null && matchHeight();
}
runMatchHeight();

// редактирует главный заголовок для соответсвия макету

function welcomeEdit() {
  const mainText = document.querySelector(".welcome__txt");
  const followedWidth = window.innerWidth;
  let br1 = "";
  let br2 = "";
  if (mainText !== null) {
    followedWidth < 640 ? (br1 = `<br />`) : (br2 = `<br />`);
    mainText.innerHTML = `Обменяй ненужное ${br1} ${br2}на нужное! ${br1}`;
  }
}
welcomeEdit();

// Ф-И ПРИ РЕСАЙЗЕ ОКНА      //////////////////////////

window.addEventListener("resize", () => {
  // следит за геометрией кнопок логина через соцсети
  renderAllSocialsBtns();
  // следит за отображением кнопки ""Вход"
  renderLoginButton();
  // следит за рендером шейпа popup
  renderPopupShape();
  // следит за форматом текста в заголовке на главной
  welcomeEdit();
  // следит за размером шейпа сообщения о необходимости регистрации
  renderUnloginedShape();
  // следит за размером шейпа добавления нового лота
  renderCreateLotShape();
  // следит за размеро шейпа в профиле
  rendProfileShape();
  // следит за размерaми кнопок при просмотре лота в разных разрежениях
  createOfferFollow();
  // следит за размерами шейпа быстрого предложения
  renderFastOfferShape();
  // следит за высотой фото в фотогаллерее лота (квадраты)
  photoGalleryWidthHandler();
  // авторесайз загруэаемых фото через быструю форму
  resizeUploadPhotosIcons();
  // следит за равной высотой контента в лотах
  runMatchHeight();
});

// добавляет кнопку ВХОД

function renderLoginButton() {
  const loginBtn = new Button(
    "header__pads-loginOlay",
    false,
    "Вход",
    "",
    22,
    "blue"
  );

  if (document.querySelector(".header__pads-loginOlay") !== null) {
    loginBtn.render();
  }
}
renderLoginButton();

// добавляет кнопки логина через соц сети в DOM

function renderAllSocialsBtns() {
  const vkDom = document.querySelector(".header__pads-vkontakte");
  const googleDom = document.querySelector(".header__pads-google");
  const yandexDom = document.querySelector(".header__pads-yandex");
  const facebookDom = document.querySelector(".header__pads-yandex");

  const styleCheck = (provider) =>
    provider.classList.contains("active") ? "outline" : "blue";

  if (vkDom && googleDom && yandexDom && facebookDom) {
    const facebookBtn = new Button(
        "header__pads-facebook",
        "fb",
        "",
        "",
        22,
        styleCheck(facebookDom)
      ),
      vkontakteBtn = new Button(
        "header__pads-vkontakte",
        "vk",
        "",
        "",
        22,
        styleCheck(vkDom)
      ),
      googleBtn = new Button(
        "header__pads-google",
        "google",
        "",
        "",
        22,
        styleCheck(googleDom)
      ),
      yandexBtn = new Button(
        "header__pads-yandex",
        "yandex",
        "",
        "",
        22,
        styleCheck(yandexDom)
      );

    facebookBtn.render();
    vkontakteBtn.render();
    googleBtn.render();
    yandexBtn.render();
  }
}
renderAllSocialsBtns();

// отображение авторизации при нажатии на кнопку ВХОД при 640 и менее

function renderPopupShape() {
  const popupShape = new Button("loginpopup", false, "", "", 36, "shape");
  if (document.querySelector(".loginpopup") !== null) {
    popupShape.renderShape();
  }
}

function loginButtonHandler() {
  let blockHeight = 102; //102
  const loginBtn = document.querySelector(".header__pads-loginOlay");
  const welcome = document.querySelector(".welcome");
  const header = document.querySelector(".header");
  const popup = document.querySelector(".loginpopup");
  const socBtnsTrack = document.querySelector(".header__pads-loginbtns");
  const socBtnsTtl = document.querySelector(".header__pads-enter");
  const leftpad = document.querySelectorAll(".header__pads")[1];
  const popupHTML = `<section class="loginpopup"></section>`;

  function firstClick() {
    if (welcome !== null) {
      blockHeight = welcome.clientHeight;
      welcome.style.display = "none";
    }
    header.insertAdjacentHTML("afterend", popupHTML);
    document.querySelector(".loginpopup").style.height = `${blockHeight}px`;
    renderPopupShape();
    document.querySelector(".loginpopup").append(socBtnsTtl);
    document.querySelector(".loginpopup").append(socBtnsTrack);
    renderAllSocialsBtns();
  }

  function secondClick() {
    leftpad.prepend(socBtnsTrack);
    leftpad.prepend(socBtnsTtl);
    popup.remove();
    if (welcome !== null) {
      welcome.style.display = "block";
    }
  }

  loginBtn.classList.toggle("bluebuttonON");

  loginBtn.classList.contains("bluebuttonON") ? firstClick() : secondClick();
}

// следит за кликом по кнопке ВХОД

if (document.querySelector(".header__pads-loginOlay") !== null) {
  document.querySelector(
    ".header__pads-loginOlay"
  ).onclick = loginButtonHandler;
}

// CTA         ////////////////////////

// создает кнопку CTA

const ctaMainButton = new Button(
  "cta__button",
  "add",
  "Есть что обменять",
  "Передумал",
  28,
  "blue"
);
const ctaAddButton = document.querySelector(".cta__button");
ctaAddButton && ctaMainButton.render();

// НЕавторизированный гость

// рендер шейпа сообщения о регистрвции

function renderUnloginedShape() {
  const unlogShape = new Button("unlogined", false, "", "", 36, "shape");
  document.querySelector(".unlogined") && unlogShape.renderShape();
}

// сборка сообщения о регистрации
// (Сценарий первого CTA клика для неавторизированного гостя)

function pleaseLoginCreate() {
  const loginBtn = document.querySelector(".header__pads-loginOlay");
  const socBtnsTrack = document.querySelector(".header__pads-loginbtns");
  const socBtnsTtl = document.querySelector(".header__pads-enter");
  const cta = document.querySelector(".cta");
  const unloginedHTML = `
      <section class="unlogined">
        <h3 class="unlogined__ttl">
          Чтобы создать лот для обмена, вам нужно авторизоваться
        </h3>
        <p class="unlogined__sub">
          Регистрация произойдёт автоматически, вам не придётся заполнять
          никаких форм!
        </p>
      </section>`;
  cta.insertAdjacentHTML("afterend", unloginedHTML);
  const unlogMsg = document.querySelector(".unlogined");
  loginBtn &&
    loginBtn.classList.contains("bluebuttonON") &&
    loginButtonHandler();

  socBtnsTtl && unlogMsg.append(socBtnsTtl);
  socBtnsTrack && unlogMsg.append(socBtnsTrack);
  loginBtn && unlogMsg.append(loginBtn);
  renderUnloginedShape();
  renderAllSocialsBtns();
}

// разборка сообщения о регистрации если гость не авторизировался
// (Сценарий второго CTA клика для неавторизированного гостя)

function pleaseLoginUndo() {
  const padLeft = document.querySelectorAll(".header__pads")[1];
  const socBtnsTtl = document.querySelector(".header__pads-enter");
  const socBtnsTrack = document.querySelector(".header__pads-loginbtns");
  const loginBtn = document.querySelector(".header__pads-loginOlay");

  socBtnsTtl && padLeft.append(socBtnsTtl);
  socBtnsTrack && padLeft.append(socBtnsTrack);
  loginBtn && padLeft.append(loginBtn);

  document.querySelector(".unlogined").remove();
  renderLoginButton();
}

// промежуточный функционал клика на кнопку CTA пользоватетелем
// (Сценарное ветвление)

function ctaUnlogined() {
  ctaAddButton.classList.contains("cta__buttonON")
    ? pleaseLoginUndo()
    : pleaseLoginCreate();
}

function ctaLogined() {
  const createLotForm = document.querySelector(".createlotHold");
  const profileLots = document.querySelector(".profileLots");
  profileLots !== null && profileLots.classList.toggle("profileLotsHide");
  createLotForm.classList.toggle("createlotHoldShow");

  ticketFileMetaBeatutify();
  addPhotosDOMRelocate();
  createLotBtns();
  resizeUploadPhotosIcons();
  renderCreateLotShape();
  TicketsHandle(createLotForm.classList.contains("createlotHoldShow"));
}

// клик по CTA

if (ctaAddButton !== null) {
  ctaAddButton.addEventListener("click", function () {
    const user = document.querySelector(".header__pads-user");
    user ? ctaLogined() : ctaUnlogined();

    document.querySelector(".lothold") &&
      document.querySelector(".lothold").classList.toggle("lothold__hide");
    document.querySelector(".pagination") &&
      document.querySelector(".pagination").classList.toggle("paginationHide");

    ctaMainButton.changeStyle();
  });
}

// ПРОФИЛЬ      ///////////////////////

// рендер шейпа профиля

function rendProfileShape() {
  const profileShape = new Button("profile", false, "", "", 36, "shape");
  document.querySelector(".profile") && profileShape.renderShape();
}
rendProfileShape();

// переключение между вкладкаи "лоты", "черновики" и "избранное" в профиле

if (document.querySelector(".profile")) {
  const profileMyLots = document.querySelector("#tab1");
  const profileDrafts = document.querySelector("#tab2");

  if (profileDrafts !== null) {
    profileDrafts.style.display = "none";
  }

  const profileLots = document.querySelectorAll(".profileLots__item");

  if (history.state !== null) {
    profileLots.forEach((tab) => {
      tab.classList.remove("profileLots__itemActive");
      if (tab.textContent === history.state.text) {
        tab.classList.add("profileLots__itemActive");
      }
    });
    profileMyLots.style.display = history.state.mylots;
    profileDrafts.style.display = history.state.drafts;
  }

  for (const select of profileLots) {
    select.addEventListener("click", function () {
      profileLots.forEach((select) => {
        select.classList.remove("profileLots__itemActive");
      });
      this.classList.add("profileLots__itemActive");

      if (this.textContent === "Мои лоты") {
        profileMyLots.style.display = "block";
        profileDrafts.style.display = "none";
      } else if (this.textContent === "Черновики") {
        profileMyLots.style.display = "none";
        profileDrafts.style.display = "block";
      }

      const currentShow = {
        mylots: profileMyLots.style.display,
        drafts: profileDrafts.style.display,
        text: this.textContent,
      };

      history.pushState(currentShow, "toShow", window.location.href);

      setTimeout(matchHeight, 200);
    });
  }
}

// кнопка сохранения изменений в профиле

const renderSaveProfileBtn = () => {
  const saveProfileData = new Button(
    "edit__profileSave",
    false,
    "Сохранить",
    "",
    28,
    "blue"
  );
  document.querySelector(".edit__profileSave") && saveProfileData.render();
};
renderSaveProfileBtn();

const profileUpdated = () => {
  let text = document.querySelector(".profile");
  text.innerHTML = text.innerHTML.replace(/Профиль обновлён./, "");
  if (/edit\?updpsuccess=1/.test(window.location.href)) {
    window.location.href = "https://obmen.market/profile/edit";
  }
};
if (document.querySelector(".edit__profile") !== null) {
  profileUpdated();
}

//  ДОБАВЛЕНИЕ ЛОТА              ///////////////////

// рендер шейпа формы создания лота

function renderCreateLotShape() {
  const lotCreateShape = new Button("createlot", false, "", "", 36, "shape");
  if (document.querySelector(".createlot") !== null) {
    lotCreateShape.renderShape();
  }
}
renderCreateLotShape();

// рендер кнопок "опубликовать" и "в черновики"

function createLotBtns() {
  const publish = new Button(
    "createlot__publish",
    "add",
    "Опубликовать",
    "",
    28,
    "blue"
  );
  const todrafts = new Button(
    "createlot__todraft",
    "drafts",
    "Сохранить черновик",
    "",
    28,
    "outline"
  );

  if (document.querySelector(".createlot__btns") !== null) {
    publish.render();
    todrafts.render();
  }
}
createLotBtns();

// ПРОСМОТР ЛОТА       ////////////////////////

// ФОТОГАЛЛЕРЕЯ

// квадратные резиновые иконки фотографий в галлерее Лота

function photoGalleryWidthHandler() {
  const container = document.querySelector(".thelot__main-gallery");
  const items = document.querySelectorAll(".thelot__main-galleryItem");

  if (container) itemWidth = container.clientWidth / 5 - 4.8;
  container &&
    items.forEach((item) => {
      item.style.width = `${itemWidth}px`;
      item.style.height = `${itemWidth}px`;
    });
}

function photoGalleryClick() {
  const container = document.querySelector(".thelot__main-gallery");
  const items = document.querySelectorAll(".thelot__main-galleryItem");
  const mainImage = document.querySelector(".thelot__main-img");

  if (container && items) {
    for (let el of items) {
      el.addEventListener("click", (e) => {
        e.preventDefault();
        const currentClick = el.children[0].src;
        mainImage.src = currentClick;
      });
    }
  }
}
photoGalleryWidthHandler();
photoGalleryClick();

// создает кнопки "предложить в обмен" и "следить"

const lotOfferBtn = new Button(
  "thelot__main-btnOffer",
  "add",
  "Предложить обмен",
  "Передумал",
  28,
  "blue"
);
const lotFollowBtn = new Button(
  "thelot__main-btnFollow",
  "bell",
  "Следить за лотом",
  "",
  28,
  "outline"
);
function createOfferFollow() {
  if (document.querySelector(".thelot") !== null) {
    document.querySelector(".thelot__main-btnOffer") !== null
      ? lotOfferBtn.render()
      : "";
    document.querySelector(".thelot__main-btnFollow") !== null
      ? lotFollowBtn.render()
      : "";
  }
}
createOfferFollow();

// создает шейп быстрого предложения

function renderFastOfferShape() {
  const fastOffer = new Button(
    "thelot__main-popoffer",
    false,
    "",
    "",
    36,
    "shape"
  );
  if (document.querySelector(".thelot__main-popoffer") !== null) {
    fastOffer.renderShape();
  }
}

// перерисовка шейпов форм при загрузке фотографий и установка размера иконок фото
// в зависимости от текущего размера вьюпрорта

if (document.querySelector("#ticket-files-list") !== null) {
  const container = document.querySelector("#ticket-files-list");
  container.addEventListener("DOMNodeInserted", () => {
    resizeUploadPhotosIcons();
    renderFastOfferShape();
    renderCreateLotShape();
  });
}

// функционал кнопки "предложить в обмен" в Лоте
// запускает сценарий бытрого предложения через упрощеную
// для не зарегистрированного пользователя предлагается зарегистрироваться

const offerBtn = document.querySelector(".thelot__main-btnOffer");
if (offerBtn !== null) {
  offerBtn.addEventListener("click", function () {
    const isUserLogined = document.querySelector(".header__pads-user");

    const fastOfferUnlogined = () => {
      const padLeft = document.querySelectorAll(".header__pads")[1];
      const loginBtn = document.querySelector(".header__pads-loginOlay");
      const socBtnsTrack = document.querySelector(".header__pads-loginbtns");
      const socBtnsTtl = document.querySelector(".header__pads-enter");

      const fastOfferButtons = document.querySelector(".thelot__main-btns");
      const pleaseLoginWrapper = document.createElement("div");
      pleaseLoginWrapper.className = "unlogined";
      const pleaseLoginHTML = `
      <h3 class="unlogined__ttl">
        Чтобы начать обмениваться, вам нужно авторизоваться
      </h3>
      <p class="unlogined__sub">
        Регистрация произойдёт автоматически, вам не придётся заполнять
        никаких форм!
      </p>
    `;
      const createMes = () => {
        fastOfferButtons.insertAdjacentElement("afterend", pleaseLoginWrapper);
        pleaseLoginWrapper.insertAdjacentHTML("afterbegin", pleaseLoginHTML);
        lotOfferBtn.changeStyle();

        loginBtn !== null && loginBtn.classList.contains("bluebuttonON")
          ? loginButtonHandler()
          : "";
        const loginMessage = document.querySelector(".unlogined");

        socBtnsTtl !== null ? loginMessage.append(socBtnsTtl) : "";
        socBtnsTrack !== null ? loginMessage.append(socBtnsTrack) : "";
        loginBtn !== null ? loginMessage.append(loginBtn) : "";
        renderAllSocialsBtns();
        renderUnloginedShape();
      };

      const undoMes = () => {
        const loginMessage = document.querySelector(".unlogined");

        socBtnsTtl !== null ? padLeft.append(socBtnsTtl) : "";
        socBtnsTrack !== null ? padLeft.append(socBtnsTrack) : "";
        loginBtn !== null ? padLeft.append(loginBtn) : "";

        loginMessage.remove();
        renderLoginButton();
        lotOfferBtn.changeStyle();
      };

      offerBtn.classList.contains("bluebuttonON") ? undoMes() : createMes();
    };

    const fastOfferLogined = () => {
      const fastForm = document.querySelector(".thelot__main-popoffer");
      const checkbox_fake = document.querySelector(".checkbox_fake");
      const checkbox_label = document.querySelector(".checkbox_label");

      const fastOfferBtn = new Button(
        "thelot__main-popOfferBtn",
        false,
        "Предложить обмен",
        "",
        28,
        "blue"
      );
      const checkbox = new Button("checkbox_fake", "check", "", "", 10, "blue");

      const handleCheckbox = () => {
        checkbox.changeStyle();
        checkbox_fake.classList.contains("checkbox_fakeON")
          ? (checkbox_label.textContent = "Я согласен(сна) на доплату")
          : (checkbox_label.textContent = "Согласны на доплату при обмене?");
      };

      fastForm.classList.toggle("thelot__main-popofferSHOW");
      ticketFileMetaBeatutify();
      lotOfferBtn.changeStyle();
      addPhotosDOMRelocate();
      checkbox.render();
      fastOfferBtn.render();

      fastForm.classList.contains("thelot__main-popofferSHOW")
        ? checkbox_fake.addEventListener("click", () => handleCheckbox())
        : checkbox_fake.removeEventListener("click", () => handleCheckbox());

      TicketsHandle(fastForm.classList.contains("thelot__main-popofferSHOW"));

      renderFastOfferShape();
    };

    isUserLogined !== null ? fastOfferLogined() : fastOfferUnlogined();
  });
}

// ПАГИНАЦИЯ      ///////////////////////

//добавляет эелементы для стилизации пагинации

// function drawPagination() {
//   const pagination = document.querySelectorAll(".page-link");
//   let cnt = 100;
//   pagination.forEach((page) => {
//     page.classList.add(`page-link${cnt}`);
//     const drawBtn = new Button(`page-link${cnt}`, false, "", "", 22);
//     const checkCl = document.querySelector(`.page-link${cnt}`);
//     checkCl !== null ? drawBtn.renderShape() : "";
//     const pagBtnSvgs = document.querySelector(`.page-link${cnt}Svg`);
//     pagBtnSvgs !== null ? pagBtnSvgs.classList.add("page-linkSvg") : "";
//     const btnParent = document.querySelectorAll(".page-item")[cnt - 100];

//     btnParent.classList.contains("disabled")
//       ? page.classList.add("disabled")
//       : "";
//     btnParent.classList.contains("active") ? page.classList.add("active") : "";
//     cnt++;
//   });
// }
// document.querySelector(".pagination") !== null ? drawPagination() : "";

// ДОПОЛНИТЕЛЬНЫЕ       //////////////////////////////

// анимация тайтла главного поискового инпута

const mainSearchInput = document.querySelector(".cta__search-input");
const mainSearchButton = document.querySelector(".cta__search-labelCont");
const mainSearchForm = document.querySelector(".simplesearch-search-form");
const mainInputFocused = () => {
  const label = document.querySelector(".cta__search-label");
  const labelIcon = document.querySelector(".cta__search-icon");
  label.textContent = "найти";
  mainSearchButton.style.cssText = `
        left: 100%;
        margin-left: -${mainSearchButton.clientWidth}px;
        z-index: 0;
    `;
  labelIcon.style.cssText = `
        opacity: 1;
    `;
};
const mainInputBlured = () => {
  mainSearchInput.value === "" ? returnStyles() : "";
  function returnStyles() {
    const label = document.querySelector(".cta__search-label");
    const labelIcon = document.querySelector(".cta__search-icon");
    label.textContent = "Поиск";
    mainSearchButton.style.cssText = `
          left: 0;
          z-index: -1;
    `;
    labelIcon.style.cssText = `
          opacity: 0;
    `;
  }
};

if (document.querySelector(".cta") !== null) {
  mainSearchInput.onfocus = mainInputFocused;
  mainSearchInput.onblur = mainInputBlured;

  if (window.location.href === "https://obmen.market/") {
    window.addEventListener("pageshow", () => {
      mainSearchInput.value = "";
    });
  }

  if (mainSearchInput.value !== "") {
    mainInputFocused();
  }
}

// автосайз полей ввода текта в формах

const lotdescr = document.querySelectorAll(".commonTextarea");
for (const tArea of lotdescr) {
  tArea.addEventListener("keyup", function () {
    this.scrollTop > 0 ? (this.style.height = `${this.scrollHeight}px`) : "";

    renderCreateLotShape();
    renderFastOfferShape();
  });
}

// ресайз в "резиновые иконки" загружаемых фото во всех формах

function resizeUploadPhotosIcons() {
  const mainFormContainer = document.querySelector(".createlot__tab");
  const fastFormContainer = document.querySelector("#ticket-files-list");

  let container =
    mainFormContainer !== null
      ? mainFormContainer
      : fastFormContainer !== null
      ? fastFormContainer
      : null;

  if (container !== null) {
    const ticketFiles = document.querySelectorAll(".ticket-file");
    const imgWrappers = document.querySelectorAll(".ticket-file-image-wrapper");
    const fileSelect = document.querySelector("#ticket-files-select");
    const filesMeta = document.querySelectorAll(".ticket-file-meta");

    const commonWidth = (container.clientWidth - 32) / 5;

    ticketFiles.forEach((file) => {
      file.style.width = `${commonWidth}px`;
      file.style.height = `${commonWidth}px`;
    });

    imgWrappers.forEach((img) => {
      img.style.width = `${commonWidth}px`;
      img.style.height = `${commonWidth}px`;
    });

    filesMeta.forEach((meta) => {
      meta.style.width = `${commonWidth}px`;
      meta.style.height = `${commonWidth}px`;
    });

    const setFileSelectSize = () => {
      fileSelect.style.width = `${commonWidth}px`;
      fileSelect.style.height = `${commonWidth}px`;
    };
    setFileSelectSize();
  }
}
resizeUploadPhotosIcons();

function addPhotosDOMRelocate() {
  const fileSelect = document.getElementById("ticket-files-select");
  const filesList = document.getElementById("ticket-files-list");

  const div = document.createElement("div");
  div.className = "addPhotoIcon";
  fileSelect.textContent = null;
  fileSelect.append(div);
  filesList.append(fileSelect);
  const addPhotoIcon = new Button("addPhotoIcon", "cam", "", "", 28, "blue");
  addPhotoIcon.render();
}

function ticketFileMetaBeatutify() {
  const ticketFileDelete = document.querySelectorAll(".ticket-file-delete");
  const icon = `
  <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M4.56919 19H11.4308C12.7061 19 13.4337 18.3134 13.4963 16.9484L13.9971 5.20009H15.0924C15.6166 5.20009 16 4.79815 16 4.24548C16 3.70119 15.6166 3.30762 15.0924 3.30762H11.7985V2.38651C11.7985 0.946232 10.8362 0 9.27922 0H6.72078C5.16381 0 4.20147 0.946232 4.20147 2.38651V3.30762H0.907579C0.391198 3.30762 0 3.70119 0 4.24548C0 4.79815 0.391198 5.20009 0.907579 5.20009H2.01076L2.51149 16.9484C2.57408 18.3134 3.30171 19 4.56919 19ZM6.05575 3.30762L6.06357 2.44513C6.07139 2.0097 6.37653 1.70824 6.81467 1.70824H9.19315C9.6313 1.70824 9.93643 2.0097 9.94425 2.44513L9.95208 3.30762H6.05575ZM4.69438 15.8431L4.41271 6.97532C4.40489 6.57338 4.66308 6.26355 4.99169 6.26355C5.32029 6.26355 5.59413 6.58175 5.60978 6.97532L5.87579 15.8347C5.88362 16.2367 5.62543 16.5549 5.289 16.5549C4.95257 16.5549 4.7022 16.2618 4.69438 15.8431ZM7.40147 15.8515V6.96695C7.40147 6.58175 7.68313 6.26355 8.00391 6.26355C8.32469 6.26355 8.60636 6.58175 8.60636 6.96695V15.8515C8.60636 16.2367 8.32469 16.5549 8.00391 16.5549C7.68313 16.5549 7.40147 16.2367 7.40147 15.8515ZM10.132 15.8347L10.398 6.97532C10.4137 6.58175 10.6797 6.26355 11.0083 6.26355C11.3447 6.26355 11.6029 6.57338 11.5951 6.97532L11.3134 15.8431C11.2978 16.2618 11.0553 16.5549 10.7267 16.5549C10.3746 16.5549 10.1242 16.2367 10.132 15.8347Z"/>
  </svg>
  `;
  ticketFileDelete.forEach((meta) => {
    meta.textContent = null;
    meta.insertAdjacentHTML("afterbegin", icon);
  });
}

// счетчик оставшегося времени публикации лота и
// цветовая индикация

class lotExpiryHandler {
  constructor(isMultiple, presentedBy, css) {
    this.isExist = isMultiple
      ? document.querySelectorAll(`.${presentedBy}`).length > 0
      : document.querySelector(`.${presentedBy}`) !== null;
    this.expiryLabels = isMultiple
      ? document.querySelectorAll(`.${css}`)
      : [document.querySelector(`.${css}`)];
    this.timeNaming = [
      {
        type: "s",
        one: "секунда",
        twofour: "секунды",
        five20: "секунд",
      },
      {
        type: "m",
        one: "минута",
        twofour: "минуты",
        five20: "минут",
      },
      {
        type: "h",
        one: "час",
        twofour: "часа",
        five20: "часов",
      },
      {
        type: "d",
        one: "день",
        twofour: "дня",
        five20: "дней",
      },
    ];
    this.svgdata = {
      time: `
      <svg width="18" height="18" viewBox="0 0 14.947 13" xmlns="http://www.w3.org/2000/svg"><path d="M8.447,0C5.441,0,2.911,2.055,2.172,4.832L0.895,2.276L0,2.724l2.268,4.536L6.747,3.9l-0.6-0.8L3.055,5.419  C3.559,2.902,5.785,1,8.447,1c3.033,0,5.5,2.467,5.5,5.5S11.48,12,8.447,12v1c3.584,0,6.5-2.916,6.5-6.5S12.031,0,8.447,0z"/><polygon points="7.947,3.5 7.947,6.768 11.17,8.916 11.725,8.084 8.947,6.232 8.947,3.5 "/></svg>`,
    };
    this.hoursOfCountdown = 3;
  }
  styler(expireLabel, numeric) {
    expireLabel.style.color =
      numeric.d > 2 ? `#413f46` : numeric.d > 1 ? `#c0540b` : `#f2002c`;
  }
  worder(timeValue, timeElement) {
    const translator = (mediator, timeElement) => {
      switch (mediator) {
        case 1:
          return timeElement.one;
        case 2:
        case 3:
        case 4:
          return timeElement.twofour;
        default:
          return timeElement.five20;
      }
    };
    const mediator = timeValue > 20 ? timeValue % 10 : timeValue;
    const toExport =
      timeValue !== 0
        ? `${timeValue} ${translator(mediator, timeElement)}`
        : "";
    return toExport;
  }
  numericToWorded(numeric) {
    const timeNaming = this.timeNaming;
    const worded = new Object();
    timeNaming.forEach((timeElement) => {
      timeElement.value = numeric[timeElement.type];
      worded[timeElement.type] = this.worder(timeElement.value, timeElement);
    });
    return worded;
  }
  minuteCountdown(modxData, worded, expiryLbl) {
    let dynamic = `${worded.h} ${worded.m}`;
    const stopCountdown = () => {
      dynamic = "Устарел";
      clearInterval(minuteInt);
    };
    const minuteInt = setInterval(() => {
      const intAbsolute = new Date(Date.parse(modxData)) - new Date();
      const intNumeric = this.timeCalcs(intAbsolute);
      const intWorded = this.numericToWorded(intNumeric);
      intAbsolute > 60000
        ? (dynamic = `${intWorded.h} ${intWorded.m}`)
        : stopCountdown();
      expiryLbl.textContent = dynamic;
    }, 60000);
    return dynamic;
  }
  timeCalcs(absoluteMs) {
    const seconds = absoluteMs / 1000;
    const d = Math.floor(seconds / (60 * 60 * 24));
    const h = Math.floor(seconds / (60 * 60)) - d * 24;
    const m = Math.floor(seconds / 60) - h * 60 - d * 24 * 60;
    const s = Math.floor(seconds) - m * 60 - h * 60 * 60 - d * 24 * 60 * 60;
    return { s: s, h: h, m: m, d: d };
  }
  publisher(absoluteMs, numeric, modxData, expiryLbl) {
    const worded = this.numericToWorded(numeric);
    const wordedLabel =
      numeric.d === 0 && numeric.h > this.hoursOfCountdown
        ? worded.h
        : numeric.d === 0 && numeric.h <= this.hoursOfCountdown
        ? this.minuteCountdown(modxData, worded, expiryLbl)
        : `${worded.d} ${worded.h}`;
    const publish = absoluteMs > 0 ? `${wordedLabel}` : "Устарел";
    return publish;
  }
  eachExpiryLabel() {
    if (this.isExist) {
      this.expiryLabels.forEach((expiryLbl) => {
        // const modxData = expiryLbl.textContent.slice(10);
        const modxData = expiryLbl.textContent;
        const absoluteMs = new Date(Date.parse(modxData)) - new Date();
        const numeric = this.timeCalcs(absoluteMs);
        expiryLbl.textContent = this.publisher(
          absoluteMs,
          numeric,
          modxData,
          expiryLbl
        );
        this.styler(expiryLbl, numeric);
      });
    }
  }
}

const handleExpiryDateOnMain = new lotExpiryHandler(
  true,
  "lothold__card",
  "lothold__card-stsTime"
);
handleExpiryDateOnMain.eachExpiryLabel();

const handleExpiryDateInLot = new lotExpiryHandler(
  false,
  "thelot__main",
  "thelot__main-stsTime"
);
handleExpiryDateInLot.eachExpiryLabel();
