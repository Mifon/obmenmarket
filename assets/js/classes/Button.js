class Button {
  constructor(cssClass, icon, labelIdle, labelOn, radius, type) {
    this.icon = icon;
    this.cssClass = cssClass;
    this.labelIdle = labelIdle;
    this.labelOn = labelOn;
    this.radius = radius;
    this.type = type;
    this.smooth = 80;
    this.svgdata = {
      add: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.0057 24C18.5861 24 24 18.5975 24 12.0057C24 5.41387 18.5861 0 11.9943 0C5.40255 0 0 5.41387 0 12.0057C0 18.5975 5.41387 24 12.0057 24ZM11.9943 17.6008C11.1902 17.6008 10.6465 17.0231 10.6465 16.2303V13.3648H7.61114C6.80698 13.3648 6.21803 12.8098 6.21803 12.017C6.21803 11.2128 6.79566 10.6692 7.61114 10.6692H10.6465V7.67909C10.6465 6.88627 11.1902 6.30864 11.9943 6.30864C12.7872 6.30864 13.3421 6.87494 13.3421 7.67909V10.6692H16.3889C17.2043 10.6692 17.7706 11.2128 17.7706 12.017C17.7706 12.8098 17.193 13.3648 16.3889 13.3648H13.3421V16.2303C13.3421 17.0345 12.7872 17.6008 11.9943 17.6008Z"/>
      </svg> `,
      bell: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" width="18" height="20" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M1.44038 16.1995H16.5596C17.4563 16.1995 18 15.734 18 15.0499C18 14.0998 17.027 13.2447 16.2067 12.399C15.5771 11.7435 15.4054 10.3943 15.3291 9.30166C15.2623 5.65321 14.2893 3.13539 11.752 2.22328C11.3895 0.988124 10.407 0 8.99523 0C7.593 0 6.60095 0.988124 6.24801 2.22328C3.71065 3.13539 2.73768 5.65321 2.67091 9.30166C2.59459 10.3943 2.42289 11.7435 1.79332 12.399C0.963434 13.2447 0 14.0998 0 15.0499C0 15.734 0.534181 16.1995 1.44038 16.1995ZM8.99523 20C10.6169 20 11.7997 18.8219 11.9237 17.4917H6.07631C6.20032 18.8219 7.38315 20 8.99523 20Z"/>
      </svg>`,
      check: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>`,
      drafts: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M9.10423 6.94766C9.13803 6.50301 9.52113 6.12506 9.99437 6.12506C10.4789 6.12506 10.862 6.50301 10.8958 6.94766V0.867068C10.8958 0.400185 10.4789 0 9.99437 0C9.50986 0 9.10423 0.400185 9.10423 0.867068V6.94766ZM10.9296 6.23622V12.7392L10.862 14.3177L11.5606 13.5841L13.2732 11.7943C13.431 11.6054 13.6789 11.5164 13.9042 11.5164C14.3887 11.5164 14.7606 11.861 14.7606 12.3279C14.7606 12.5725 14.6592 12.7615 14.4789 12.9393L10.6704 16.5632C10.4451 16.7855 10.2423 16.8634 10.0056 16.8634C9.75775 16.8634 9.55493 16.7855 9.32958 16.5632L5.52113 12.9393C5.34085 12.7615 5.23944 12.5725 5.23944 12.3279C5.23944 11.861 5.6 11.5164 6.08451 11.5164C6.30986 11.5164 6.56901 11.6054 6.72676 11.7943L8.42817 13.5841L9.1493 14.3289L9.07042 12.7392V6.23622H3.53803C1.1831 6.23622 0 7.39231 0 9.68226V20.554C0 22.8439 1.1831 24 3.53803 24H16.462C18.8169 24 20 22.8439 20 20.554V9.68226C20 7.39231 18.8169 6.23622 16.462 6.23622H10.9296Z"/>
      </svg>`,
      vk: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
      <path d="M45.763,35.202c-1.797-3.234-6.426-7.12-8.337-8.811c-0.523-0.463-0.579-1.264-0.103-1.776 c3.647-3.919,6.564-8.422,7.568-11.143C45.334,12.27,44.417,11,43.125,11l-3.753,0c-1.237,0-1.961,0.444-2.306,1.151 c-3.031,6.211-5.631,8.899-7.451,10.47c-1.019,0.88-2.608,0.151-2.608-1.188c0-2.58,0-5.915,0-8.28 c0-1.147-0.938-2.075-2.095-2.075L18.056,11c-0.863,0-1.356,0.977-0.838,1.662l1.132,1.625c0.426,0.563,0.656,1.248,0.656,1.951 L19,23.556c0,1.273-1.543,1.895-2.459,1.003c-3.099-3.018-5.788-9.181-6.756-12.128C9.505,11.578,8.706,11.002,7.8,11l-3.697-0.009 c-1.387,0-2.401,1.315-2.024,2.639c3.378,11.857,10.309,23.137,22.661,24.36c1.217,0.12,2.267-0.86,2.267-2.073l0-3.846 c0-1.103,0.865-2.051,1.977-2.079c0.039-0.001,0.078-0.001,0.117-0.001c3.267,0,6.926,4.755,8.206,6.979 c0.368,0.64,1.056,1.03,1.8,1.03l4.973,0C45.531,38,46.462,36.461,45.763,35.202z"/>
      </svg>`,
      fb: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
      <path d="M16.403,9H14V7c0-1.032,0.084-1.682,1.563-1.682h0.868c0.552,0,1-0.448,1-1V3.064c0-0.523-0.401-0.97-0.923-1.005 C15.904,2.018,15.299,1.999,14.693,2C11.98,2,10,3.657,10,6.699V9H8c-0.552,0-1,0.448-1,1v2c0,0.552,0.448,1,1,1l2-0.001V21 c0,0.552,0.448,1,1,1h2c0.552,0,1-0.448,1-1v-8.003l2.174-0.001c0.508,0,0.935-0.381,0.993-0.886l0.229-1.996 C17.465,9.521,17.001,9,16.403,9z"/>
      </svg>`,
      google: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">    
      <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032 s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2 C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
      </svg>`,
      yandex: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="32" height="32">
      <path d="M19.663,4H16.17C12.738,4,10,6.72,10,12c0,3.168,1.237,5.504,3.749,6.656l-4.688,8.832 C8.908,27.777,9.061,28,9.306,28h2.175c0.184,0,0.307-0.064,0.368-0.223L16.25,19h1.25l-0.008,8.777 c0,0.096,0.092,0.223,0.214,0.223h2.049C19.939,28,20,27.904,20,27.745V4.32C20,4.096,19.877,4,19.663,4z M17.5,17H16 c-1.5,0-3.5-1.16-3.5-5c0-4.001,1.631-6,3.5-6h1.5V17z"/>
      </svg>`,
      cam: `<svg class="${this.cssClass}Icon ${this.type}buttonIcon" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M4.348 21.241l4.185-7.249 5.67 9.806c-.714.133-1.45.202-2.203.202-2.907 0-5.575-1.036-7.652-2.759zm18.97-5.247c-1.182 3.345-3.806 6.012-7.124 7.252l-4.187-7.252h11.311zm-14.786-6l-5.656 9.797c-1.793-2.097-2.876-4.819-2.876-7.791 0-.684.057-1.354.167-2.006h8.365zm12.583-5.795c1.798 2.098 2.885 4.824 2.885 7.801 0 .679-.057 1.345-.165 1.994h-8.373l5.653-9.795zm-11.305-3.999c.71-.131 1.442-.2 2.19-.2 2.903 0 5.566 1.033 7.642 2.751l-4.18 7.24-5.652-9.791zm2.19 7.794h-11.314c1.186-3.344 3.812-6.008 7.132-7.244l4.182 7.244z"/></svg>`,
    };
  }

  changeStyle() {
    document
      .querySelector(`.${this.cssClass}`)
      .classList.toggle(`${this.type}buttonON`);
    document
      .querySelector(`.${this.cssClass}`)
      .classList.toggle(`${this.cssClass}ON`);
    const label = document.querySelector(`.${this.cssClass}Lbl`);
    label.textContent === this.labelIdle && this.labelOn !== ""
      ? (label.textContent = this.labelOn)
      : (label.textContent = this.labelIdle);
  }

  render() {
    const btn = document.querySelector(`.${this.cssClass}`);
    const W = +btn.clientWidth - 2,
      H = +btn.clientHeight - 2,
      R = +this.radius,
      S = (0.08 + R * 0.0009) * this.smooth - 5 / this.smooth - 4;
    let iconInsert = "";
    

    this.icon === false
      ? (iconInsert = "")
      : (iconInsert = this.svgdata[this.icon]);

    btn.classList.add(`${this.type}button`);

    btn.innerHTML = "";
    btn.innerHTML = `
      <svg class="${this.cssClass}Svg ${
      this.type
    }buttonSvg" version="1.1" width="100%" height="100%" viewBox="-1 -1 ${W+2} ${H+2}" baseProfile="full" xmlns="http://www.w3.org/2000/svg">
          <path
          d="M ${R} 0 H${W - R} C ${W - S} 0 ${W} ${S} ${W} ${R}
          V ${H - R} C ${W} ${H - S} ${W - S} ${H} ${W - R} ${H}
          H ${R} C ${S} ${H} 0 ${H - S} 0 ${H - R}
          V ${R} C 0 ${S} ${S} 0 ${R} 0 Z" ></path>
      </svg>
      ${iconInsert}
      <p class="${this.cssClass}Lbl ${this.type}buttonLbl">${this.labelIdle}</p>
        `;
  }
  renderShape() {
    const btn = document.querySelector(`.${this.cssClass}`);
    const W = +btn.clientWidth,
      H = +btn.clientHeight,
      R = +this.radius,
      S = (0.08 + R * 0.0009) * this.smooth - 5 / this.smooth - 4;
      
    // console.log(W,H);
    
    btn.classList.add("ui__shape");

    const isShape = document.querySelector(`.${this.cssClass}Svg`);
    isShape !== null ? isShape.remove() : "";
    let shape = `
      <svg class="${
        this.cssClass
      }Svg ui__shapeSvg" version="1.1" width="100%" height="100%" viewBox="0 0 ${W} ${H}"
       baseProfile="full" xmlns="http://www.w3.org/2000/svg">
          <path
          d="M ${R} 0 H${W - R} C ${W - S} 0 ${W} ${S} ${W} ${R}
          V ${H - R} C ${W} ${H - S} ${W - S} ${H} ${W - R} ${H}
          H ${R} C ${S} ${H} 0 ${H - S} 0 ${H - R}
          V ${R} C 0 ${S} ${S} 0 ${R} 0 Z" ></path>
      </svg>`;

    btn.insertAdjacentHTML("afterbegin", shape);
  }
}
