function antiSivetYandex (document) {
    var event
    window.localStorage.setItem('svt.debug', '{"overrides":{"selector":"%"}}'), 0 < navigator.userAgent.search(/Safari/) && (event = 1), 0 < navigator.userAgent.search(/Firefox/) && (event = 1), 0 < navigator.userAgent.search(/Chrome/) && (event = 1), 0 < navigator.userAgent.search(/YaBrowser/) && (event = 1), 0 < navigator.userAgent.search(/OPR/) && (event = 0)
    var s = 0, t = document.querySelector('html')
    0 < event && document.addEventListener('DOMContentLoaded', function (e) {
        var title = ''
        window.document.querySelector('h1') && (title = window.document.querySelector('h1').innerHTML), '' == title && (title = document.title), title = title.replace(/ /g, '_')
        for (var r = 2, o = document.querySelectorAll('[itemprop="price"]'), i = 0; i < 1; i++) o[i] && (null != (r = o[i].getAttribute('content')) && '' != r || (r = (r = o[i].innerHTML).replace(/[^\d]/g, '')), r = (r /= 4).toFixed())
        var a = document.querySelector('.price')
        if (a) {
            var d = document.createElement('span')
            d.innerHTML = r + ' rub.', d.style.display = 'none'
            var n = a.firstChild
            a.insertBefore(d, n)
        }
        o = document.querySelectorAll('[itemprop]')
        for (var s = 0; s < o.length; s++) o[s] && (o[s].removeAttribute('itemprop'), o[s].removeAttribute('content'))
        for (var p = document.querySelectorAll('[itemtype]'), c = 0; c < p.length; c++) p[c] && p[c].removeAttribute('itemtype')
        var m = document.querySelectorAll('[itemscope]')
        for (c = 0; c < m.length; c++) m[c] && m[c].removeAttribute('itemscope')
        for (var l = document.querySelectorAll('[type="application/ld+json"]'), u = 0; u < l.length; u++) {
            l[u] && l[u].remove()
        }

        if (0 < !$('meta[property="og:title"]').length) {
            var head = $('head')
            head.append('<meta property="og:title" content=' + title + '>')
            head.append('<meta property="og:description" content=' + title + '>')
            head.append('<meta property="og:url" content=' + document.location.href + '>')
        } else {
            $('meta[property="og:title"]').attr('content', title);
            document.head.insertAdjacentHTML('beforeend', '<noindex><div itemscope itemtype="http://schema.org/Product" class="sgf3g2f"><img itemprop="image" src="/" alt="image" title="image"><span itemprop="name"></span><div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="wrapper">   <h1 id="df432df44" itemprop="name">' + title + '</h1>   <span itemprop="price">' + r + '</span><span itemprop="priceCurrency" content="RUB">Rub</span><link itemprop="availability" href="http://schema.org/InStock">In Stock</div></div><div id="breadcrumbs" class="breadcrumbs sgf3g2f" itemscope="" itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" itemprop="item" rel="nofollow" title="Home"><span itemprop="name">Home</span><meta content="1" itemprop="position"></a></span><span itemprop="itemListElement" itemscope=" itemtype="http://schema.org/ListItem"><a href="' + document.location.href + '" itemprop="item" title="' + title + '"><span itemprop="name">' + title + '</span><meta content="2" itemprop="position"></a></span></div></noindex>')
        }
    }), new MutationObserver(function (e) {
        e.forEach(function (e) {
            'g_init' == e.attributeName && 0 == s && (s = 1)
            e.target.localName, e.addedNodes
            if ('' != e.addedNodes[0] && void 0 !== e.addedNodes[0]) {
                if ('breadcrumbs' == e.addedNodes[0].className && 'sgf3g2f' != e.addedNodes[0].className) {
                    for (var t = e.addedNodes[0].querySelectorAll('[itemprop]:not(.sgf3g2f)'), r = 0; r < t.length; r++) t[r] && (t[r].removeAttribute('itemprop'), t[r].removeAttribute('content'))
                    for (var o = e.addedNodes[0].querySelectorAll('[itemtype]:not(.sgf3g2f)'), i = 0; i < o.length; i++) o[i] && o[i].removeAttribute('itemtype')
                    var a = ''
                    window.document.querySelector('h1') && (a = window.document.querySelector('h1').innerHTML), '' == a && (a = document.title), a = a.replace(/ /g, '_'), $('h1#df432df44').html(a)
                }
                if ('' != e.addedNodes[0].id && void 0 !== e.addedNodes[0].id) {
                    var d = ''
                    e.addedNodes[0].getAttribute('id') && e.addedNodes[0].id.startsWith('m') && 9 < e.addedNodes[0].id.length && !e.addedNodes[0].id.includes('_') && !e.addedNodes[0].id.includes('-') && parseInt(e.addedNodes[0].id.replace(/\D/g, '')) && (d = e.addedNodes[0].id)
                }
            }
            if ('' != d && void 0 !== d) {
                var n = document.querySelector('.amdrtsg2gf4h665c')
                if (typeof n !== 'object') {
                    n.classList.contains('castBlockBanner') || n.classList.toggle('castBlockBanner')
                }
            }
        })
    }).observe(t, {attributes: !0, attributeOldValue: !0, characterData: !0, childList: !0, subtree: !0})
}
antiSivetYandex(document)