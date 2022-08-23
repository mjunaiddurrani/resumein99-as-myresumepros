<?php
// $packagesJson = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/includes/packages.json');
// $packagesArray = json_decode($packagesJson,true);
// $packagesCat = $packagesArray['pacakges']['categories'];
// require('nitro.start.php');
require_once("token.php");
require_once("ppc_or_seo.php");
if (isset($_SERVER['HTTPS'])) {
    $requesMet = "https";
} else {
    $requesMet = "http";
}



?>

<!-- <head> -->
<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">

<head>
    <script>
        if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nonitro/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nonitro=1"
                    } else {
                        document.location.href = href.replace("#", "?nonitro=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nonitro=1"
                    } else {
                        document.location.href = href.replace("#", "&nonitro=1#")
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://cdn-gaohk.nitrocdn.com" />
    <link rel="preload" href="https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/happy-elementor-addons/assets/fonts/happy-icons.woff2" as="font" type="font/woff2" crossorigin class="nitro-font-preload" />
    <link rel="preload" href="https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin class="nitro-font-preload" />
    <link rel="preload" href="https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin class="nitro-font-preload" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resumein 99</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="msapplication-TileImage" content="wp-content/uploads/2022/07/cropped-fav-270x270.png" />
    <meta name="generator" content="NitroPack" />
    <script>
        var NPSH, NitroScrollHelper;
        NPSH = NitroScrollHelper = function() {
            var o = null;
            var r = history.state;
            var t = r && typeof r.nitroScrollPos !== "undefined" && r.nitroScrollPos && r.nitroScrollPos > 0;
            var e = t ? r.nitroScrollPos : 0;

            function l() {
                if (r !== null) {
                    if (typeof r === "object") {
                        r.nitroScrollPos = window.pageYOffset
                    }
                } else {
                    r = {
                        nitroScrollPos: window.pageYOffset
                    }
                }
                history.replaceState(r, "")
            }
            window.addEventListener("scroll", function() {
                if (o !== null) clearTimeout(o);
                o = setTimeout(l, 200)
            }, {
                passive: true
            });
            return {
                isScrolled: function() {
                    return t
                },
                getScrollPos: function() {
                    return e
                }
            }
        }();
    </script>
    <script>
        (function() {
            var a = false;
            var e = document.documentElement.classList;
            var i = navigator.userAgent.toLowerCase();
            var n = ["android", "iphone", "ipad"];
            var r = n.length;
            var o;
            var d = null;
            for (var t = 0; t < r; t++) {
                o = n[t];
                if (i.indexOf(o) > -1) d = o;
                if (e.contains(o)) {
                    a = true;
                    e.remove(o)
                }
            }
            if (a && d) {
                e.add(d);
                if (d == "iphone" || d == "ipad") {
                    e.add("ios")
                }
            }
        })();
    </script>
    <script type="text/worker" id="nitro-web-worker">var preloadRequests=0;var remainingCount={};var baseURI="";self.onmessage=function(e){switch(e.data.cmd){case"RESOURCE_PRELOAD":var a=e.data.requestId;remainingCount[a]=0;e.data.resources.forEach(function(o){preload(o,function(e){return function(){console.log(e+" DONE: "+o);if(--remainingCount[e]==0){self.postMessage({cmd:"RESOURCE_PRELOAD",requestId:e})}}}(a));remainingCount[a]++});break;case"SET_BASEURI":baseURI=e.data.uri;break}};async function preload(o,a){if(typeof URL!=="undefined"&&baseURI){try{var e=new URL(o,baseURI);o=e.href}catch(e){console.log("Worker error: "+e.message)}}console.log("Preloading "+o);try{var n=new Request(o,{mode:"no-cors",redirect:"follow"});await fetch(n);a()}catch(e){console.log(e);var r=new XMLHttpRequest;r.responseType="blob";r.onload=a;r.onerror=a;r.open("GET",o,true);r.send()}}</script>
    <script id="nprl">
        (function(e) {
            var t = e.prototype;
            t.after || (t.after = function() {
                var e, t = arguments,
                    n = t.length,
                    r = 0,
                    i = this,
                    o = i.parentNode,
                    a = Node,
                    c = String,
                    u = document;
                if (o !== null) {
                    while (r < n) {
                        (e = t[r]) instanceof a ? (i = i.nextSibling) !== null ? o.insertBefore(e, i) : o.appendChild(e) : o.appendChild(u.createTextNode(c(e)));
                        ++r
                    }
                }
            })
        })(Element);
        var NPRL, NitroResourceLoader;
        NPRL = NitroResourceLoader = function() {
            var r = window.URL || window.webkitURL;
            var t = true;
            var f = false;
            var n = 2;
            var e = null;
            var q = null;
            var v;
            var i;
            var m = null;
            var o = null;
            var a = null;
            var c = {
                touch: ["touchmove", "touchend"],
                default: ["mousemove", "click", "keydown", "wheel"]
            };
            var u = true;
            var B = [];
            var d = false;
            var p = [];
            var h = 0;
            var s = 0;
            var H = false;
            var g = 0;
            var E = null;
            var D = false;
            var U = false;
            var l = false;
            var _ = [];
            var y = [];
            var N = [];
            var b = [];
            var Y = false;
            var L = {};
            var w = "noModule" in HTMLScriptElement.prototype;
            var F = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;

            function R(e, t) {
                if (!L[e]) {
                    L[e] = []
                }
                L[e].push(t)
            }

            function G(e, t) {
                if (L[e]) {
                    var n = 0,
                        r = L[e];
                    for (var n = 0; n < r.length; n++) {
                        r[n].call(this, t)
                    }
                }
            }

            function P() {
                (function(i, t) {
                    var n = null;
                    var r = function(e) {
                        n(e)
                    };
                    var e = null;
                    var o = {};
                    var a = null;
                    var c = null;
                    var u = 0;
                    i.addEventListener(t, function(e) {
                        if (["load", "DOMContentLoaded"].indexOf(t) != -1) {
                            if (c) {
                                A(function() {
                                    i.triggerNitroEvent(t)
                                })
                            }
                            a = true
                        } else if (t == "readystatechange") {
                            u++;
                            NPh.ogReadyState = u == 1 ? "interactive" : "complete";
                            if (c && c >= u) {
                                NPh.documentReadyState = NPh.ogReadyState;
                                A(function() {
                                    i.triggerNitroEvent(t)
                                })
                            }
                        }
                    });
                    i.addEventListener(t + "Nitro", function(e) {
                        if (["load", "DOMContentLoaded"].indexOf(t) != -1) {
                            if (!a) {
                                e.preventDefault();
                                e.stopImmediatePropagation()
                            } else {}
                            c = true
                        } else if (t == "readystatechange") {
                            c = NPh.documentReadyState == "interactive" ? 1 : 2;
                            if (u < c) {
                                e.preventDefault();
                                e.stopImmediatePropagation()
                            }
                        }
                    });
                    switch (t) {
                        case "load":
                            e = "onload";
                            break;
                        case "readystatechange":
                            e = "onreadystatechange";
                            break;
                        case "pageshow":
                            e = "onpageshow";
                            break;
                        default:
                            e = null;
                            break
                    }
                    if (e) {
                        Object.defineProperty(i, e, {
                            get: function() {
                                return n
                            },
                            set: function(e) {
                                if (typeof e !== "function") {
                                    n = null;
                                    i.removeEventListener(t + "Nitro", r)
                                } else {
                                    if (!n) {
                                        i.addEventListener(t + "Nitro", r)
                                    }
                                    n = e
                                }
                            }
                        })
                    }
                    Object.defineProperty(i, "addEventListener" + t, {
                        value: function(e) {
                            if (e != t || !NPh.startedScriptLoading || document.currentScript && document.currentScript.hasAttribute("nitro-exclude")) {} else {
                                arguments[0] += "Nitro"
                            }
                            i.ogAddEventListener.apply(i, arguments);
                            o[arguments[1]] = arguments[0]
                        }
                    });
                    Object.defineProperty(i, "removeEventListener" + t, {
                        value: function(e) {
                            var t = o[arguments[1]];
                            arguments[0] = t;
                            i.ogRemoveEventListener.apply(i, arguments)
                        }
                    });
                    Object.defineProperty(i, "triggerNitroEvent" + t, {
                        value: function(e, t) {
                            t = t || i;
                            var n = new Event(e + "Nitro", {
                                bubbles: true
                            });
                            n.isNitroPack = true;
                            Object.defineProperty(n, "type", {
                                get: function() {
                                    return e
                                },
                                set: function() {}
                            });
                            Object.defineProperty(n, "target", {
                                get: function() {
                                    return t
                                },
                                set: function() {}
                            });
                            i.dispatchEvent(n)
                        }
                    });
                    if (typeof i.triggerNitroEvent === "undefined") {
                        (function() {
                            var n = i.addEventListener;
                            var r = i.removeEventListener;
                            Object.defineProperty(i, "ogAddEventListener", {
                                value: n
                            });
                            Object.defineProperty(i, "ogRemoveEventListener", {
                                value: r
                            });
                            Object.defineProperty(i, "addEventListener", {
                                value: function(e) {
                                    var t = "addEventListener" + e;
                                    if (typeof i[t] !== "undefined") {
                                        i[t].apply(i, arguments)
                                    } else {
                                        n.apply(i, arguments)
                                    }
                                }
                            });
                            Object.defineProperty(i, "removeEventListener", {
                                value: function(e) {
                                    var t = "removeEventListener" + e;
                                    if (typeof i[t] !== "undefined") {
                                        i[t].apply(i, arguments)
                                    } else {
                                        r.apply(i, arguments)
                                    }
                                }
                            });
                            Object.defineProperty(i, "triggerNitroEvent", {
                                value: function(e, t) {
                                    var n = "triggerNitroEvent" + e;
                                    if (typeof i[n] !== "undefined") {
                                        i[n].apply(i, arguments)
                                    }
                                }
                            })
                        })()
                    }
                }).apply(null, arguments)
            }
            P(window, "load");
            P(window, "pageshow");
            P(window, "DOMContentLoaded");
            P(document, "DOMContentLoaded");
            P(document, "readystatechange");
            try {
                var S = new Worker(r.createObjectURL(new Blob([document.getElementById("nitro-web-worker").textContent], {
                    type: "text/javascript"
                })))
            } catch (e) {
                var S = new Worker("data:text/javascript;base64," + btoa(document.getElementById("nitro-web-worker").textContent))
            }
            S.onmessage = function(e) {
                if (e.data.cmd == "RESOURCE_PRELOAD") {
                    G(e.data.requestId, e)
                }
            };
            if (typeof document.baseURI !== "undefined") {
                S.postMessage({
                    cmd: "SET_BASEURI",
                    uri: document.baseURI
                })
            }
            var W = function(e) {
                if (--h == 0) {
                    A(K)
                }
            };
            var T = function(e) {
                e.target.removeEventListener("load", T);
                e.target.removeEventListener("error", T);
                e.target.removeEventListener("nitroTimeout", T);
                if (e.type != "nitroTimeout") {
                    clearTimeout(e.target.nitroTimeout)
                }
                if (--s == 0 && h == 0) {
                    A(Q)
                }
            };
            var X = function(e) {
                var t = e.textContent;
                try {
                    var n = r.createObjectURL(new Blob([t.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1")], {
                        type: "text/javascript"
                    }))
                } catch (e) {
                    var n = "data:text/javascript;base64," + btoa(t.replace(/^(?:<!--)?(.*?)(?:-->)?$/gm, "$1"))
                }
                return n
            };
            var K = function() {
                NPh.documentReadyState = "interactive";
                document.triggerNitroEvent("readystatechange");
                document.triggerNitroEvent("DOMContentLoaded");
                if (window.pageYOffset || window.pageXOffset) {
                    window.dispatchEvent(new Event("scroll"))
                }
                U = true;
                A(function() {
                    if (s == 0) {
                        A(Q)
                    }
                    A(J)
                })
            };
            var Q = function() {
                if (!U || D) return;
                D = true;
                E.disconnect();
                Z();
                NPh.documentReadyState = "complete";
                document.triggerNitroEvent("readystatechange");
                window.triggerNitroEvent("load", document);
                window.triggerNitroEvent("pageshow", document);
                if (window.pageYOffset || window.pageXOffset || location.hash) {
                    let e = typeof history.scrollRestoration !== "undefined" && history.scrollRestoration == "auto";
                    if (e && typeof NPSH !== "undefined" && NPSH.getScrollPos() > 0) {
                        window.scrollTo(0, NPSH.getScrollPos())
                    } else if (location.hash) {
                        try {
                            let e = document.querySelector(location.hash);
                            if (e) {
                                e.scrollIntoView()
                            }
                        } catch (e) {}
                    }
                }
                var e = null;
                if (n == 1) {
                    e = M
                } else {
                    e = re
                }
                A(e)
            };
            var A = function(e) {
                setTimeout(e, 0)
            };
            var O = function(e) {
                if (e.type == "touchend" || e.type == "click") {
                    a = e
                }
            };
            var J = function() {
                if (a) {
                    setTimeout(function(r) {
                        return function() {
                            var e = function(e, t, n) {
                                var r = new Event(e, {
                                    bubbles: true,
                                    cancelable: true
                                });
                                if (e == "click") {
                                    r.clientX = t;
                                    r.clientY = n
                                } else {
                                    r.touches = [{
                                        clientX: t,
                                        clientY: n
                                    }]
                                }
                                return r
                            };
                            var t;
                            if (r.type == "touchend") {
                                var n = r.changedTouches[0];
                                t = document.elementFromPoint(n.clientX, n.clientY);
                                t.dispatchEvent(e("touchstart"), n.clientX, n.clientY);
                                t.dispatchEvent(e("touchend"), n.clientX, n.clientY);
                                t.dispatchEvent(e("click"), n.clientX, n.clientY)
                            } else if (r.type == "click") {
                                t = document.elementFromPoint(r.clientX, r.clientY);
                                t.dispatchEvent(e("click"), r.clientX, r.clientY)
                            }
                        }
                    }(a), 150);
                    a = null
                }
            };
            var I = function(e) {
                if (e.tagName == "SCRIPT" && !e.hasAttribute("data-nitro-for-id") && !e.hasAttribute("nitro-document-write") || e.tagName == "IMG" && (e.hasAttribute("src") || e.hasAttribute("srcset")) || e.tagName == "IFRAME" && e.hasAttribute("src") || e.tagName == "LINK" && e.hasAttribute("href") && e.hasAttribute("rel") && e.getAttribute("rel") == "stylesheet") {
                    var t = "";
                    switch (e.tagName) {
                        case "LINK":
                            t = e.href;
                            break;
                        case "IMG":
                            if (b.indexOf(e) > -1) return;
                            t = e.srcset || e.src;
                            break;
                        default:
                            t = e.src;
                            break
                    }
                    var n = e.getAttribute("type");
                    if (!t && e.tagName !== "SCRIPT") return;
                    if ((e.tagName == "IMG" || e.tagName == "LINK") && (t.indexOf("data:") === 0 || t.indexOf("blob:") === 0)) return;
                    if (e.tagName == "SCRIPT" && n && n !== "text/javascript" && n !== "application/javascript") {
                        if (n !== "module" || !w) return
                    }
                    if (e.tagName === "SCRIPT") {
                        if (b.indexOf(e) > -1) return;
                        if (e.noModule && w) {
                            return
                        }
                        if (!e.src) {
                            if (e.textContent.length > 0) {
                                e.textContent += "\n;if(document.currentScript.nitroTimeout) {clearTimeout(document.currentScript.nitroTimeout);}; setTimeout(function() { this.dispatchEvent(new Event('load')); }.bind(document.currentScript), 0);"
                            } else {
                                return
                            }
                        }
                        b.push(e)
                    }
                    if (!e.hasOwnProperty("nitroTimeout")) {
                        s++;
                        e.addEventListener("load", T, true);
                        e.addEventListener("error", T, true);
                        e.addEventListener("nitroTimeout", T, true);
                        e.nitroTimeout = setTimeout(function() {
                            console.log("Resource timed out", e);
                            e.dispatchEvent(new Event("nitroTimeout"))
                        }, 5e3)
                    }
                }
            };
            var $ = function(e) {
                if (e.hasOwnProperty("nitroTimeout") && e.nitroTimeout) {
                    clearTimeout(e.nitroTimeout);
                    e.nitroTimeout = null;
                    e.dispatchEvent(new Event("nitroTimeout"))
                }
            };
            document.documentElement.addEventListener("load", function(e) {
                if (e.target.tagName == "SCRIPT" || e.target.tagName == "IMG") {
                    b.push(e.target)
                }
            }, true);
            document.documentElement.addEventListener("error", function(e) {
                if (e.target.tagName == "SCRIPT" || e.target.tagName == "IMG") {
                    b.push(e.target)
                }
            }, true);
            var V = ["appendChild", "replaceChild", "insertBefore", "prepend", "append", "before", "after", "replaceWith", "insertAdjacentElement"];
            var z = function() {
                V.forEach(function(t) {
                    HTMLElement.prototype["og" + t] = HTMLElement.prototype[t];
                    HTMLElement.prototype[t] = function(...e) {
                        if (this.parentNode || this === document.documentElement) {
                            switch (t) {
                                case "replaceChild":
                                case "insertBefore":
                                    e.pop();
                                    break;
                                case "insertAdjacentElement":
                                    e.shift();
                                    break
                            }
                            e.forEach(function(e) {
                                if (!e) return;
                                if (e.tagName == "SCRIPT") {
                                    I(e)
                                } else {
                                    if (e.children && e.children.length > 0) {
                                        e.querySelectorAll("script").forEach(I)
                                    }
                                }
                            })
                        }
                        return this["og" + t].apply(this, arguments)
                    }
                })
            };
            var Z = function() {
                V.forEach(function(e) {
                    HTMLElement.prototype[e] = HTMLElement.prototype["og" + e]
                })
            };
            var C = async function() {
                if (f) {
                    j(v);
                    j(O);
                    if (m) {
                        clearTimeout(m);
                        m = null
                    }
                }
                if (g === 1) {
                    H = true;
                    return
                } else if (g === 0) {
                    g = -1
                }
                NPh.startedScriptLoading = true;
                Object.defineProperty(document, "readyState", {
                    get: function() {
                        return NPh.documentReadyState
                    },
                    set: function() {}
                });
                var e = document.documentElement;
                var t = {
                    attributes: true,
                    attributeFilter: ["src"],
                    childList: true,
                    subtree: true
                };
                E = new MutationObserver(function(e, t) {
                    e.forEach(function(e) {
                        if (e.type == "childList" && e.addedNodes.length > 0) {
                            e.addedNodes.forEach(function(e) {
                                if (!document.documentElement.contains(e)) return;
                                if (e.tagName == "IMG" || e.tagName == "IFRAME" || e.tagName == "LINK") {
                                    I(e)
                                }
                            })
                        }
                        if (e.type == "childList" && e.removedNodes.length > 0) {
                            e.removedNodes.forEach(function(e) {
                                if (e.tagName == "IFRAME" || e.tagName == "LINK") {
                                    $(e)
                                }
                            })
                        }
                        if (e.type == "attributes") {
                            var t = e.target;
                            if (!document.documentElement.contains(t)) return;
                            if (t.tagName == "IFRAME" || t.tagName == "LINK" || t.tagName == "IMG" || t.tagName == "SCRIPT") {
                                I(t)
                            }
                        }
                    })
                });
                E.observe(e, t);
                z();
                await Promise.all(_);
                var n = p.shift();
                var r = null;
                var i = false;
                while (n) {
                    var o;
                    var a = JSON.parse(atob(n.meta));
                    var c = a.delay;
                    if (n.type == "inline") {
                        var u = document.getElementById(n.id);
                        if (u) {
                            u.remove()
                        } else {
                            n = p.shift();
                            continue
                        }
                        o = X(u);
                        if (o === false) {
                            n = p.shift();
                            continue
                        }
                    } else {
                        o = n.src
                    }
                    if (!i && n.type != "inline" && (typeof a.attributes.async != "undefined" || typeof a.attributes.defer != "undefined")) {
                        if (r === null) {
                            r = n
                        } else if (r === n) {
                            i = true
                        }
                        if (!i) {
                            p.push(n);
                            n = p.shift();
                            continue
                        }
                    }
                    var d = document.createElement("script");
                    d.src = o;
                    d.setAttribute("data-nitro-for-id", n.id);
                    for (var s in a.attributes) {
                        try {
                            if (a.attributes[s] === false) {
                                d.setAttribute(s, "")
                            } else {
                                d.setAttribute(s, a.attributes[s])
                            }
                        } catch (e) {
                            console.log("Error while setting script attribute", d, e)
                        }
                    }
                    d.async = false;
                    if (c) {
                        setTimeout(function(e, t) {
                            var n = document.querySelector("[data-nitro-marker-id='" + t + "']");
                            if (n) {
                                n.after(e)
                            } else {
                                document.head.appendChild(e)
                            }
                        }.bind(null, d, n.id), c)
                    } else {
                        d.addEventListener("load", W);
                        d.addEventListener("error", W);
                        if (!d.noModule || !w) {
                            h++
                        }
                        var l = document.querySelector("[data-nitro-marker-id='" + n.id + "']");
                        if (l) {
                            A(function(e, t) {
                                return function() {
                                    e.after(t)
                                }
                            }(l, d))
                        } else {
                            A(function(e) {
                                return function() {
                                    document.head.appendChild(e)
                                }
                            }(d))
                        }
                    }
                    n = p.shift()
                }
            };
            var ee = function() {
                var e = document.getElementById("nitro-deferred-styles");
                var t = document.createElement("div");
                t.innerHTML = e.textContent;
                return t
            };
            var M = async function(e) {
                isPreload = e && e.type == "NitroPreload";
                if (!isPreload) {
                    g = -1;
                    u = false;
                    if (f) {
                        j(v);
                        j(O);
                        if (m) {
                            clearTimeout(m);
                            m = null
                        }
                    }
                }
                if (d === false) {
                    var t = ee();
                    let e = t.querySelectorAll('style,link[rel="stylesheet"]');
                    d = e.length;
                    if (d) {
                        let e = document.getElementById("nitro-deferred-styles-marker");
                        e.replaceWith.apply(e, t.childNodes)
                    } else if (isPreload) {
                        A(k)
                    } else {
                        x()
                    }
                } else if (d === 0 && !isPreload) {
                    x()
                }
            };
            var te = function() {
                var e = ee();
                var t = e.childNodes;
                var n;
                var r = [];
                for (var i = 0; i < t.length; i++) {
                    n = t[i];
                    if (n.href) {
                        r.push(n.href)
                    }
                }
                var o = "css-preload";
                R(o, function(e) {
                    M(new Event("NitroPreload"))
                });
                if (r.length) {
                    S.postMessage({
                        cmd: "RESOURCE_PRELOAD",
                        resources: r,
                        requestId: o
                    })
                } else {
                    A(function() {
                        G(o)
                    })
                }
            };
            var ne = function() {
                if (g === -1) return;
                g = 1;
                var e = [];
                var t, n;
                for (var r = 0; r < p.length; r++) {
                    t = p[r];
                    if (t.type != "inline") {
                        if (t.src) {
                            n = JSON.parse(atob(t.meta));
                            if (n.delay) continue;
                            if (n.attributes.type && n.attributes.type == "module" && !w) continue;
                            e.push(t.src)
                        }
                    }
                }
                if (e.length) {
                    var i = "js-preload";
                    R(i, function(e) {
                        g = 2;
                        if (H) {
                            A(C)
                        }
                    });
                    S.postMessage({
                        cmd: "RESOURCE_PRELOAD",
                        resources: e,
                        requestId: i
                    })
                }
            };
            var re = function() {
                while (y.length) {
                    style = y.shift();
                    if (style.hasAttribute("nitropack-onload")) {
                        style.setAttribute("onload", style.getAttribute("nitropack-onload"));
                        A(function(e) {
                            return function() {
                                e.dispatchEvent(new Event("load"))
                            }
                        }(style))
                    }
                }
                while (N.length) {
                    style = N.shift();
                    if (style.hasAttribute("nitropack-onerror")) {
                        style.setAttribute("onerror", style.getAttribute("nitropack-onerror"));
                        A(function(e) {
                            return function() {
                                e.dispatchEvent(new Event("error"))
                            }
                        }(style))
                    }
                }
            };
            var k = function() {
                if (!Y) {
                    if (t) {
                        A(function() {
                            var e = document.getElementById("nitro-critical-css");
                            if (e) {
                                e.remove()
                            }
                        })
                    }
                    Y = true;
                    onStylesLoadEvent = new Event("NitroStylesLoaded");
                    onStylesLoadEvent.isNitroPack = true;
                    window.dispatchEvent(onStylesLoadEvent)
                }
            };
            var x = function() {
                if (n == 2) {
                    A(C)
                } else {
                    re()
                }
            };
            var ie = function(t) {
                i.forEach(function(e) {
                    document.addEventListener(e, t, true)
                })
            };
            var j = function(t) {
                i.forEach(function(e) {
                    document.removeEventListener(e, t, true)
                })
            };
            return {
                setAutoRemoveCriticalCss: function(e) {
                    t = e
                },
                registerScript: function(e, t, n) {
                    p.push({
                        type: "remote",
                        src: e,
                        id: t,
                        meta: n
                    })
                },
                registerInlineScript: function(e, t) {
                    p.push({
                        type: "inline",
                        id: e,
                        meta: t
                    })
                },
                registerStyle: function(e, t, n) {
                    B.push({
                        href: e,
                        rel: t,
                        media: n
                    })
                },
                onLoadStyle: function(e) {
                    y.push(e);
                    if (d !== false && --d == 0) {
                        A(k);
                        if (u) {
                            u = false
                        } else {
                            x()
                        }
                    }
                },
                onErrorStyle: function(e) {
                    N.push(e);
                    if (d !== false && --d == 0) {
                        A(k);
                        if (u) {
                            u = false
                        } else {
                            x()
                        }
                    }
                },
                loadJs: function(e, t) {
                    if (!e.src) {
                        var n = X(e);
                        if (n !== false) {
                            e.src = n;
                            e.textContent = ""
                        }
                    }
                    if (t) {
                        A(function(e, t) {
                            return function() {
                                e.after(t)
                            }
                        }(t, e))
                    } else {
                        A(function(e) {
                            return function() {
                                document.head.appendChild(e)
                            }
                        }(e))
                    }
                },
                loadQueuedResources: async function() {
                    if (o) {
                        clearTimeout(o);
                        o = null
                    }
                    window.removeEventListener("load", NPRL.loadQueuedResources);
                    v = n == 1 ? C : M;
                    if (!f || a) {
                        A(v)
                    } else {
                        if (navigator.userAgent.indexOf(" Edge/") == -1) {
                            te();
                            R("css-preload", ne)
                        }
                        ie(v);
                        if (q) {
                            if (e) {
                                m = setTimeout(v, e)
                            }
                        } else {}
                    }
                },
                fontPreload: function(e) {
                    var t = "critical-fonts";
                    R(t, function(e) {
                        document.getElementById("nitro-critical-fonts").type = "text/css"
                    });
                    S.postMessage({
                        cmd: "RESOURCE_PRELOAD",
                        resources: e,
                        requestId: t
                    })
                },
                boot: function() {
                    let e = history.state;
                    l = typeof NPSH !== "undefined" && NPSH.getScrollPos() > document.documentElement.clientHeight * .5;
                    if (location.hash || l) {
                        f = false
                    }
                    i = c.default.concat(c.touch);
                    o = setTimeout(NPRL.loadQueuedResources, 1500);
                    ie(O);
                    if (l) {
                        NPRL.loadQueuedResources()
                    } else {
                        window.addEventListener("load", NPRL.loadQueuedResources)
                    }
                },
                addPrerequisite: function(e) {
                    _.push(e)
                }
            }
        }();
        var NPh, NitroPackHelper;
        NPh = NitroPackHelper = function() {
            var a = document.write;
            return {
                documentWrite: function(e, t) {
                    if (e && e.hasAttribute("nitro-exclude")) {
                        return a.call(document, t)
                    }
                    var n = null;
                    if (e.documentWriteContainer) {
                        n = e.documentWriteContainer
                    } else {
                        n = document.createElement("span");
                        e.documentWriteContainer = n
                    }
                    var r = null;
                    if (e) {
                        if (e.hasAttribute("data-nitro-for-id")) {
                            r = document.querySelector('template[data-nitro-marker-id="' + e.getAttribute("data-nitro-for-id") + '"]')
                        } else {
                            r = e
                        }
                    }
                    n.innerHTML += t;
                    n.querySelectorAll("script").forEach(function(e) {
                        e.setAttribute("nitro-document-write", "")
                    });
                    if (!n.parentNode) {
                        if (r) {
                            r.parentNode.insertBefore(n, r)
                        } else {
                            document.body.appendChild(n)
                        }
                    }
                    var i = document.createElement("span");
                    i.innerHTML = t;
                    var o = i.querySelectorAll("script");
                    if (o.length) {
                        o.forEach(function(t) {
                            var e = t.getAttributeNames();
                            var n = document.createElement("script");
                            e.forEach(function(e) {
                                n.setAttribute(e, t.getAttribute(e))
                            });
                            n.async = false;
                            if (!t.src && t.textContent) {
                                n.textContent = t.textContent
                            }
                            NPRL.loadJs(n, r)
                        })
                    }
                },
                TrustLogo: function(e, t) {
                    var n = document.getElementById(e);
                    var r = document.createElement("img");
                    r.src = t;
                    n.parentNode.insertBefore(r, n)
                },
                documentReadyState: "loading",
                ogReadyState: document.readyState,
                startedScriptLoading: false,
                loadScriptDelayed: function(t, e) {
                    setTimeout(function() {
                        var e = document.createElement("script");
                        e.src = t;
                        document.head.appendChild(e)
                    }, e)
                }
            }
        }();
        document.write = function(e) {
            NPh.documentWrite(document.currentScript, e)
        };
        document.writeln = function(e) {
            NPh.documentWrite(document.currentScript, e + "\n")
        };
    </script><template id="nitro-deferred-styles-marker"></template>
    <style type="text/css" id="nitro-critical-css">
        @charset "UTF-8";

        body,
        figure,
        h2,
        h3,
        html,
        li,
        p,
        ul {
            border: 0;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
        }

        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        main,
        nav {
            display: block;
        }

        a {
            background-color: transparent;
        }

        a,
        a:visited {
            text-decoration: none;
        }

        img {
            border: 0;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        figure {
            margin: 0;
        }

        button,
        input {
            color: inherit;
            font: inherit;
            margin: 0;
        }

        button {
            overflow: visible;
        }

        button {
            text-transform: none;
        }

        button {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        input {
            line-height: normal;
        }

        .ast-container {
            max-width: 100%;
        }

        .ast-container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        h2,
        h3 {
            clear: both;
        }

        .entry-content h2,
        h2 {
            color: #808285;
            font-size: 1.7em;
            line-height: 1.3;
        }

        .entry-content h3,
        h3 {
            color: #808285;
            font-size: 1.5em;
            line-height: 1.4;
        }

        html {
            box-sizing: border-box;
        }

        *,
        :after,
        :before {
            box-sizing: inherit;
        }

        body {
            color: #808285;
            background: #fff;
            font-style: normal;
        }

        ul {
            margin: 0 0 1.5em 3em;
        }

        ul {
            list-style: disc;
        }

        li>ul {
            margin-bottom: 0;
            margin-left: 1.5em;
        }

        i {
            font-style: italic;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        button,
        input {
            color: #808285;
            font-weight: 400;
            font-size: 100%;
            margin: 0;
            vertical-align: baseline;
        }

        button,
        input {
            line-height: normal;
        }

        button {
            border: 1px solid;
            border-color: #eaeaea;
            border-radius: 2px;
            background: #e6e6e6;
            padding: .6em 1em .4em;
            color: #fff;
        }

        input[type=email],
        input[type=tel],
        input[type=text] {
            color: #666;
            border: 1px solid #ccc;
            border-radius: 2px;
            -webkit-appearance: none;
        }

        a {
            color: #4169e1;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body:not(.logged-in) {
            position: relative;
        }

        #page {
            position: relative;
        }

        a {
            text-decoration: none;
        }

        img {
            vertical-align: middle;
        }

        .entry-content h2,
        .entry-content h3 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 1.75em;
        }

        input {
            line-height: 1;
        }

        body,
        button {
            line-height: 1.8571428571429;
        }

        body {
            background-color: #fff;
        }

        #page {
            display: block;
        }

        #primary {
            width: 100%;
        }

        #primary {
            margin: 4em 0;
        }

        .entry-content>:last-child {
            margin-bottom: 0;
        }

        body {
            overflow-x: hidden;
        }

        input[type=email],
        input[type=tel],
        input[type=text] {
            color: #666;
            padding: .75em;
            height: auto;
            border-width: 1px;
            border-style: solid;
            border-color: #eaeaea;
            border-radius: 2px;
            background: #fafafa;
            box-shadow: none;
            box-sizing: border-box;
        }

        .page .entry-header {
            margin-bottom: 1.5em;
        }

        .ast-single-post .entry-header.ast-header-without-markup {
            margin-bottom: 0;
        }

        .entry-header {
            margin-bottom: 1em;
            word-wrap: break-word;
        }

        .entry-content {
            word-wrap: break-word;
        }

        .entry-content p {
            margin-bottom: 1.6em;
        }

        :root {
            --ast-container-default-xlg-padding: 3em;
            --ast-container-default-lg-padding: 3em;
            --ast-container-default-slg-padding: 2em;
            --ast-container-default-md-padding: 3em;
            --ast-container-default-sm-padding: 3em;
            --ast-container-default-xs-padding: 2.4em;
            --ast-container-default-xxs-padding: 1.8em;
        }

        html {
            font-size: 93.75%;
        }

        a {
            color: var(--ast-global-color-0);
        }

        body,
        button,
        input {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
            font-weight: inherit;
            font-size: 15px;
            font-size: 1rem;
        }

        h2,
        .entry-content h2 {
            font-size: 30px;
            font-size: 2rem;
        }

        h3,
        .entry-content h3 {
            font-size: 25px;
            font-size: 1.6666666666667rem;
        }

        body,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3 {
            color: var(--ast-global-color-3);
        }

        .ast-single-post .entry-content a {
            text-decoration: underline;
        }

        .ast-single-post .elementor-button-wrapper .elementor-button {
            text-decoration: none;
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }

        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0;
        }

        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }

        .ast-page-builder-template .entry-header {
            margin-top: 2em;
            margin-left: auto;
            margin-right: auto;
        }

        #page {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #page .site-content {
            flex-grow: 1;
        }

        @media (max-width:921px) {
            #primary {
                padding: 1.5em 0;
                margin: 0;
            }
        }

        .elementor-button-wrapper .elementor-button {
            border-style: solid;
            text-decoration: none;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
        }

        body .elementor-button.elementor-size-sm,
        body .elementor-button {
            border-radius: 2px;
            padding-top: 15px;
            padding-right: 30px;
            padding-bottom: 15px;
            padding-left: 30px;
        }

        @media (max-width:921px) {

            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button {
                padding-top: 14px;
                padding-right: 28px;
                padding-bottom: 14px;
                padding-left: 28px;
            }
        }

        @media (max-width:544px) {

            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button {
                padding-top: 12px;
                padding-right: 24px;
                padding-bottom: 12px;
                padding-left: 24px;
            }
        }

        .elementor-button-wrapper .elementor-button {
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
        }

        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: #fff;
        }

        .elementor-button-wrapper .elementor-button {
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
        }

        button {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            color: #fff;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            border-radius: 2px;
            padding-top: 15px;
            padding-right: 30px;
            padding-bottom: 15px;
            padding-left: 30px;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1;
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }

        @media (max-width:544px) {
            button {
                padding-top: 12px;
                padding-right: 24px;
                padding-bottom: 12px;
                padding-left: 24px;
            }
        }

        @media (max-width:921px) {
            button {
                padding-top: 14px;
                padding-right: 28px;
                padding-bottom: 14px;
                padding-left: 28px;
            }
        }

        @media (max-width:921px) {

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }
        }

        @media (max-width:544px) {

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }
        }

        @media (max-width:921px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (max-width:544px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px;
            }
        }

        @media (min-width:922px) {
            .site-content .ast-container {
                display: flex;
            }
        }

        @media (max-width:921px) {
            .site-content .ast-container {
                flex-direction: column;
            }
        }

        html body {
            --wp--custom--ast-default-block-top-padding: 3em;
            --wp--custom--ast-default-block-right-padding: 3em;
            --wp--custom--ast-default-block-bottom-padding: 3em;
            --wp--custom--ast-default-block-left-padding: 3em;
            --wp--custom--ast-container-width: 1200px;
            --wp--custom--ast-content-width-size: 1200px;
            --wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));
        }

        @media (max-width:921px) {
            html body {
                --wp--custom--ast-default-block-top-padding: 3em;
                --wp--custom--ast-default-block-right-padding: 2em;
                --wp--custom--ast-default-block-bottom-padding: 3em;
                --wp--custom--ast-default-block-left-padding: 2em;
            }
        }

        @media (max-width:544px) {
            html body {
                --wp--custom--ast-default-block-top-padding: 3em;
                --wp--custom--ast-default-block-right-padding: 1.5em;
                --wp--custom--ast-default-block-bottom-padding: 3em;
                --wp--custom--ast-default-block-left-padding: 1.5em;
            }
        }

        :root {
            --ast-global-color-0: #0170b9;
            --ast-global-color-1: #3a3a3a;
            --ast-global-color-2: #3a3a3a;
            --ast-global-color-3: #4b4f58;
            --ast-global-color-4: #f5f5f5;
            --ast-global-color-5: #fff;
            --ast-global-color-6: #f2f5f7;
            --ast-global-color-7: #424242;
            --ast-global-color-8: #000;
        }

        h2,
        .entry-content h2,
        h3,
        .entry-content h3 {
            color: var(--ast-global-color-2);
        }

        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }

        .ast-page-builder-template {
            background-color: var(--ast-global-color-5);
        }

        @media (max-width:921px) {
            .ast-page-builder-template {
                background-color: var(--ast-global-color-5);
            }
        }

        @media (max-width:544px) {
            .ast-page-builder-template {
                background-color: var(--ast-global-color-5);
            }
        }

        :root {
            --e-global-color-astglobalcolor0: #0170b9;
            --e-global-color-astglobalcolor1: #3a3a3a;
            --e-global-color-astglobalcolor2: #3a3a3a;
            --e-global-color-astglobalcolor3: #4b4f58;
            --e-global-color-astglobalcolor4: #f5f5f5;
            --e-global-color-astglobalcolor5: #fff;
            --e-global-color-astglobalcolor6: #f2f5f7;
            --e-global-color-astglobalcolor7: #424242;
            --e-global-color-astglobalcolor8: #000;
        }

        ul {
            box-sizing: border-box;
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        body {
            --wp--preset--color--black: #000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #fff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        body {
            margin: 0;
        }

        body {
            --wp--style--block-gap: 24px;
        }

        .fa-circle:before {
            content: "\f111" !important;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        .fa-circle:before {
            content: "\f111";
        }

        .sp-easy-accordion * {
            box-sizing: border-box;
        }

        .sp-easy-accordion .sp-ea-single .ea-body {
            padding: 15px;
            background: #fff;
            border-top: none;
        }

        .sp-easy-accordion .sp-ea-single .ea-body p:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .sp-easy-accordion>.sp-ea-single>.sp-collapse>.ea-body p:first-of-type {
            padding-top: 0;
            margin-top: 0;
        }

        .sp-ea-one.sp-easy-accordion .sp-ea-single .ea-body {
            padding: 15px;
            overflow: hidden;
        }

        .spcollapse:not(.show) {
            display: none;
        }

        #sp-ea-301.sp-easy-accordion>.sp-ea-single>.sp-collapse>.ea-body {
            background: #fff;
            color: #444;
        }

        .tss-wrapper .rt-responsive-img {
            max-width: 100%;
            height: auto;
        }

        .tss-carousel.swiper .profile-img-wrapper {
            position: relative;
        }

        .tss-wrapper img.rt-responsive-img.rt-dummy-img {
            width: 150px;
        }

        .tss-wrapper .tss-carousel1 .single-item-wrapper .profile-img-wrapper {
            text-align: center;
        }

        @media (max-width:767px) {
            .tss-wrapper .profile-img-wrapper {
                display: flex;
                justify-content: center;
            }
        }

        [class^=eicon] {
            display: inline-block;
            font-family: eicons;
            font-size: inherit;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .eicon-menu-bar:before {
            content: "";
        }

        .eicon-chevron-right:before {
            content: "";
        }

        .eicon-chevron-left:before {
            content: "";
        }

        .elementor-screen-only,
        .screen-reader-text {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .elementor {
            -webkit-hyphens: manual;
            -ms-hyphens: manual;
            hyphens: manual;
        }

        .elementor *,
        .elementor :after,
        .elementor :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .elementor a {
            -webkit-box-shadow: none;
            box-shadow: none;
            text-decoration: none;
        }

        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
            margin: 0;
        }

        .elementor-widget-wrap>.elementor-element.elementor-absolute {
            position: absolute;
        }

        .elementor-widget-wrap>.elementor-element.elementor-fixed {
            position: fixed;
        }

        .elementor-widget-wrap .elementor-element.elementor-widget__width-initial {
            max-width: 100%;
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: var(--flex-direction);
            flex-direction: var(--flex-direction);
            -ms-flex-wrap: var(--flex-wrap);
            flex-wrap: var(--flex-wrap);
            -webkit-box-pack: var(--justify-content);
            -ms-flex-pack: var(--justify-content);
            justify-content: var(--justify-content);
            -webkit-box-align: var(--align-items);
            -ms-flex-align: var(--align-items);
            align-items: var(--align-items);
            -ms-flex-line-pack: var(--align-content);
            align-content: var(--align-content);
            gap: var(--gap);
            -ms-flex-preferred-size: var(--flex-basis);
            flex-basis: var(--flex-basis);
            -webkit-box-flex: var(--flex-grow);
            -ms-flex-positive: var(--flex-grow);
            flex-grow: var(--flex-grow);
            -ms-flex-negative: var(--flex-shrink);
            flex-shrink: var(--flex-shrink);
            -webkit-box-ordinal-group: var(--order);
            -ms-flex-order: var(--order);
            order: var(--order);
            -ms-flex-item-align: var(--align-self);
            align-self: var(--align-self);
        }

        .elementor-element.elementor-absolute,
        .elementor-element.elementor-fixed {
            z-index: 1;
        }

        .elementor-align-center {
            text-align: center;
        }

        .elementor-align-center .elementor-button {
            width: auto;
        }

        @media (max-width:1024px) {
            .elementor-tablet-align-left {
                text-align: left;
            }

            .elementor-tablet-align-left .elementor-button {
                width: auto;
            }
        }

        :root {
            --page-title-display: block;
        }

        .elementor-section {
            position: relative;
        }

        .elementor-section .elementor-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative;
        }

        @media (max-width:1024px) {
            .elementor-section .elementor-container {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-line-pack: start;
            align-content: flex-start;
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .elementor-widget-wrap>.elementor-element {
            width: 100%;
        }

        .elementor-widget {
            position: relative;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-widget:not(:last-child).elementor-absolute,
        .elementor-widget:not(:last-child).elementor-widget__width-initial {
            margin-bottom: 0;
        }

        .elementor-column {
            min-height: 1px;
        }

        .elementor-column {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px;
        }

        @media (min-width:768px) {
            .elementor-column.elementor-col-33 {
                width: 33.333%;
            }

            .elementor-column.elementor-col-50 {
                width: 50%;
            }

            .elementor-column.elementor-col-100 {
                width: 100%;
            }
        }

        @media (max-width:767px) {
            .elementor-column {
                width: 100%;
            }
        }

        .elementor-button {
            display: inline-block;
            line-height: 1;
            background-color: #818a91;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 3px;
            color: #fff;
            fill: #fff;
            text-align: center;
        }

        .elementor-button:visited {
            color: #fff;
        }

        .elementor-button-content-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .elementor-button-text {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
            display: inline-block;
        }

        .elementor-button span {
            text-decoration: inherit;
        }

        .elementor-icon {
            display: inline-block;
            line-height: 1;
            color: #818a91;
            font-size: 50px;
            text-align: center;
        }

        .elementor-icon i {
            width: 1em;
            height: 1em;
            position: relative;
            display: block;
        }

        .elementor-icon i:before {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .swiper-container .swiper-slide figure {
            line-height: 0;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        .swiper-wrapper {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        .swiper-slide {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            z-index: 10;
        }

        .elementor-pagination-position-outside .swiper-container {
            padding-bottom: 30px;
        }

        .elementor-pagination-position-outside .elementor-swiper-button {
            top: calc(50% - 30px / 2);
        }

        .elementor-arrows-position-outside .swiper-container {
            width: calc(100% - 60px);
        }

        .elementor-arrows-position-outside .elementor-swiper-button-prev {
            left: 0;
        }

        .elementor-arrows-position-outside .elementor-swiper-button-next {
            right: 0;
        }

        .elementor-swiper-button {
            position: absolute;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            z-index: 1;
            font-size: 25px;
            color: hsla(0, 0%, 93.3%, .9);
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .elementor-swiper-button-prev {
            left: 10px;
        }

        .elementor-swiper-button-next {
            right: 10px;
        }

        .elementor .elementor-element ul.elementor-icon-list-items {
            padding: 0;
        }

        @media (max-width:767px) {
            .elementor .elementor-hidden-mobile {
                display: none;
            }
        }

        @media (min-width:768px) and (max-width:1024px) {
            .elementor .elementor-hidden-tablet {
                display: none;
            }
        }

        @media (min-width:1025px) and (max-width:99999px) {
            .elementor .elementor-hidden-desktop {
                display: none;
            }
        }

        .ha-css-transform-yes {
            -webkit-transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
            transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
        }

        .elementor-kit-9 {
            --e-global-color-primary: #6ec1e4;
            --e-global-color-secondary: #54595f;
            --e-global-color-text: #7a7a7a;
            --e-global-color-accent: #61ce70;
            --e-global-color-7a04a83: #f29f02;
            --e-global-color-2454fa6: #068c73;
            --e-global-color-7204f65: #2b2822;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Archivo";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

        @media (max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }
        }

        @media (max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }
        }

        .swiper-slide {
            border-style: solid;
            border-width: 0;
            overflow: hidden;
        }

        .swiper-slide a {
            display: inline;
        }

        .elementor-headline {
            font-size: 43px;
            line-height: 1.2;
            display: block;
        }

        .elementor-headline--style-rotate .elementor-headline-dynamic-wrapper {
            text-align: left;
            overflow: hidden;
        }

        .elementor-headline-text-wrapper {
            vertical-align: bottom;
        }

        .elementor-headline-dynamic-wrapper {
            display: inline-block;
            position: relative;
        }

        .elementor-headline-animation-type-slide-down .elementor-headline-text-wrapper {
            display: inline-block;
            padding: .2em 0;
        }

        .elementor-headline-animation-type-slide-down .elementor-headline-dynamic-wrapper {
            overflow: hidden;
            vertical-align: top;
        }

        .elementor-item:after,
        .elementor-item:before {
            display: block;
            position: absolute;
        }

        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):after,
        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):before {
            opacity: 0;
        }

        .e--pointer-underline .elementor-item:after,
        .e--pointer-underline .elementor-item:before {
            height: 3px;
            width: 100%;
            left: 0;
            background-color: #55595c;
            z-index: 2;
        }

        .e--pointer-underline .elementor-item:after {
            content: "";
            bottom: 0;
        }

        .elementor-nav-menu--main .elementor-nav-menu a {
            padding: 13px 20px;
        }

        .elementor-nav-menu--main .elementor-nav-menu ul {
            position: absolute;
            width: 12em;
            border-width: 0;
            border-style: solid;
            padding: 0;
        }

        .elementor-nav-menu--layout-horizontal {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu a {
            white-space: nowrap;
        }

        .elementor-nav-menu__align-center .elementor-nav-menu {
            margin-left: auto;
            margin-right: auto;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .elementor-widget-nav-menu .elementor-widget-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .elementor-nav-menu {
            position: relative;
            z-index: 2;
        }

        .elementor-nav-menu:after {
            content: " ";
            display: block;
            height: 0;
            font: 0/0 serif;
            clear: both;
            visibility: hidden;
            overflow: hidden;
        }

        .elementor-nav-menu,
        .elementor-nav-menu li,
        .elementor-nav-menu ul {
            display: block;
            list-style: none;
            margin: 0;
            padding: 0;
            line-height: normal;
        }

        .elementor-nav-menu ul {
            display: none;
        }

        .elementor-nav-menu a,
        .elementor-nav-menu li {
            position: relative;
        }

        .elementor-nav-menu li {
            border-width: 0;
        }

        .elementor-nav-menu a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .elementor-nav-menu a {
            padding: 10px 20px;
            line-height: 20px;
        }

        .elementor-menu-toggle {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 22px;
            padding: .25em;
            border: 0 solid;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, .05);
            color: #494c4f;
        }

        .elementor-nav-menu--dropdown {
            background-color: #fff;
            font-size: 13px;
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container {
            margin-top: 10px;
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
            overflow: auto;
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container .elementor-sub-item {
            font-size: .85em;
        }

        .elementor-nav-menu--dropdown a {
            color: #494c4f;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.elementor-nav-menu--dropdown a {
            text-shadow: none;
            border-left: 8px solid transparent;
        }

        .elementor-nav-menu--toggle .elementor-menu-toggle:not(.elementor-active)+.elementor-nav-menu__container {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            max-height: 0;
        }

        .elementor-nav-menu--stretch .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            position: absolute;
            z-index: 9997;
        }

        @media (min-width:1025px) {

            .elementor-nav-menu--dropdown-tablet .elementor-menu-toggle,
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
                display: none;
            }
        }

        @media (max-width:1024px) {
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main {
                display: none;
            }
        }

        .elementor-location-header:before {
            content: "";
            display: table;
            clear: both;
        }

        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text {
            display: inline-block;
        }

        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .fa-circle:before {
            content: "\f111";
        }

        .fa-dot-circle:before {
            content: "";
        }

        .fas {
            font-family: "Font Awesome 5 Free";
        }

        .fas {
            font-weight: 900;
        }

        .she-header-yes {
            -webkit-transform: all .4 sease-in-out, height .4s ease-in-out, background-color .4s ease-in-out, border-bottom-width .4s ease-in-out, border-bottom-color .4s ease-in-out !important;
            -moz-transform: all .4 sease-in-out, height .4s ease-in-out, background-color .4s ease-in-out, border-bottom-width .4s ease-in-out, border-bottom-color .4s ease-in-out !important;
            -ms-transform: all .4 sease-in-out, height .4s ease-in-out, background-color .4s ease-in-out, border-bottom-width .4s ease-in-out, border-bottom-color .4s ease-in-out !important;
            -o-transform: all .4 sease-in-out, height .4s ease-in-out, background-color .4s ease-in-out, border-bottom-width .4s ease-in-out, border-bottom-color .4s ease-in-out !important;
            transform: all .4 sease-in-out, height .4s ease-in-out, background-color .4s ease-in-out, border-bottom-width .4s ease-in-out, border-bottom-color .4s ease-in-out !important;
        }

        .elementor-11 .elementor-element.elementor-element-b026ad1:not(.elementor-motion-effects-element-type-background) {
            background-color: #068c73;
        }

        .elementor-11 .elementor-element.elementor-element-b026ad1 {
            padding: 200px 0px 150px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-0f09e93.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-11 .elementor-element.elementor-element-0a5ba65 .elementor-headline {
            text-align: left;
            font-family: "Archivo", Sans-serif;
            font-size: 61px;
            font-weight: 300;
            letter-spacing: -1.6px;
        }

        .elementor-11 .elementor-element.elementor-element-0a5ba65 .elementor-headline-plain-text {
            color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-0a5ba65>.elementor-widget-container {
            margin: -8px 0px -66px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-93b3d19 .elementor-headline {
            text-align: left;
            font-family: "Archivo", Sans-serif;
            font-size: 61px;
            font-weight: 300;
            letter-spacing: -1.6px;
        }

        .elementor-11 .elementor-element.elementor-element-93b3d19 .elementor-headline-plain-text {
            color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-93b3d19>.elementor-widget-container {
            margin: -14px 0px -60px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-b5c59b2 .elementor-headline {
            text-align: left;
            font-family: "Archivo", Sans-serif;
            font-size: 61px;
            font-weight: 300;
            letter-spacing: -1.6px;
        }

        .elementor-11 .elementor-element.elementor-element-b5c59b2 .elementor-headline-plain-text {
            color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-b5c59b2>.elementor-widget-container {
            margin: -21px 0px -42px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-cb88bff {
            color: #fff;
            font-family: "Archivo", Sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 22px;
            width: 84%;
            max-width: 84%;
        }

        .elementor-11 .elementor-element.elementor-element-cb88bff>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-1d5ae90 {
            margin-top: 20px;
            margin-bottom: 0px;
        }

        .elementor-11 .elementor-element.elementor-element-7d43a70>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(16px / 2);
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(16px / 2);
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-icon i {
            color: var(--e-global-color-7a04a83);
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec {
            --e-icon-list-icon-size: 14px;
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-text {
            color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-item>.elementor-icon-list-text {
            font-family: "Archivo", Sans-serif;
            line-height: 22px;
        }

        .elementor-11 .elementor-element.elementor-element-4d5cfc5>.elementor-element-populated {
            margin: 0px 0px 0px 10px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 10px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(16px / 2);
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(16px / 2);
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-icon i {
            color: var(--e-global-color-7a04a83);
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c {
            --e-icon-list-icon-size: 14px;
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-text {
            color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-item>.elementor-icon-list-text {
            font-family: "Archivo", Sans-serif;
            line-height: 22px;
        }

        .elementor-11 .elementor-element.elementor-element-fecab9b .elementor-button {
            font-family: "Archivo", Sans-serif;
            fill: #000;
            color: #000;
            background-color: var(--e-global-color-7a04a83);
            border-radius: 8px 8px 8px 8px;
            padding: 16px 20px 16px 20px;
        }

        .elementor-11 .elementor-element.elementor-element-fecab9b>.elementor-widget-container {
            margin: 20px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-80c8124>.elementor-widget-container {
            margin: 0px 0px 0px 120px;
            padding: 25px 5px 0px 15px;
        }

        .elementor-11 .elementor-element.elementor-element-66faaea {
            width: initial;
            max-width: initial;
            top: -23px;
        }

        body:not(.rtl) .elementor-11 .elementor-element.elementor-element-66faaea {
            left: -10px;
        }

        .elementor-11 .elementor-element.elementor-element-cb46634 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-11 .elementor-element.elementor-element-cb46634.elementor-view-default .elementor-icon {
            color: #fff;
            border-color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-cb46634 .elementor-icon {
            font-size: 20px;
        }

        .elementor-11 .elementor-element.elementor-element-cb46634 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-11 .elementor-element.elementor-element-cb46634 {
            width: initial;
            max-width: initial;
            top: 41px;
        }

        body:not(.rtl) .elementor-11 .elementor-element.elementor-element-cb46634 {
            left: 128px;
        }

        .elementor-11 .elementor-element.elementor-element-c522313 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-11 .elementor-element.elementor-element-c522313.elementor-view-default .elementor-icon {
            color: #fff;
            border-color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-c522313 .elementor-icon {
            font-size: 20px;
        }

        .elementor-11 .elementor-element.elementor-element-c522313 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-11 .elementor-element.elementor-element-c522313 {
            width: initial;
            max-width: initial;
            top: 136px;
        }

        body:not(.rtl) .elementor-11 .elementor-element.elementor-element-c522313 {
            left: 499px;
        }

        .elementor-11 .elementor-element.elementor-element-124ab84 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-11 .elementor-element.elementor-element-124ab84.elementor-view-default .elementor-icon {
            color: #fff;
            border-color: #fff;
        }

        .elementor-11 .elementor-element.elementor-element-124ab84 .elementor-icon {
            font-size: 20px;
        }

        .elementor-11 .elementor-element.elementor-element-124ab84 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-11 .elementor-element.elementor-element-124ab84 {
            width: 4.082%;
            max-width: 4.082%;
            top: 402px;
        }

        body:not(.rtl) .elementor-11 .elementor-element.elementor-element-124ab84 {
            left: 82px;
        }

        .elementor-11 .elementor-element.elementor-element-0567052 {
            padding: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-ab865fd.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-11 .elementor-element.elementor-element-365d6c3:not(.elementor-motion-effects-element-type-background) {
            background-color: #2b2822;
        }

        .elementor-11 .elementor-element.elementor-element-365d6c3 {
            border-radius: 6px 6px 6px 6px;
        }

        .elementor-11 .elementor-element.elementor-element-365d6c3 {
            margin-top: -120px;
            margin-bottom: 0px;
            padding: 25px 0px 25px 0px;
            z-index: 9;
        }

        .elementor-11 .elementor-element.elementor-element-2724432.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-11 .elementor-element.elementor-element-25a5c04 {
            text-align: center;
        }

        .elementor-11 .elementor-element.elementor-element-25a5c04 .elementor-heading-title {
            color: #fff;
            font-family: "Archivo", Sans-serif;
            font-size: 38px;
            font-weight: 700;
        }

        .elementor-11 .elementor-element.elementor-element-a36cda4 {
            text-align: center;
        }

        .elementor-11 .elementor-element.elementor-element-a36cda4 .elementor-heading-title {
            color: #fff;
            font-family: "Archivo", Sans-serif;
            font-size: 15px;
            font-weight: 400;
        }

        .elementor-11 .elementor-element.elementor-element-6fe5a0c {
            --e-image-carousel-slides-to-show: 6;
        }

        .elementor-11 .elementor-element.elementor-element-6fe5a0c>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-a562577 {
            padding: 40px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-52cd2bb {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-52cd2bb .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 38px;
            font-weight: 700;
        }

        .elementor-11 .elementor-element.elementor-element-1a14f38 {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 22px;
        }

        .elementor-11 .elementor-element.elementor-element-1a14f38>.elementor-widget-container {
            margin: 0px 0px -22px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-d97ea07 {
            padding: 10px 0px 0px 0px;
        }

        .elementor-11 .elementor-element.elementor-element-db323d3:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap {
            background-color: #f5f5f5;
        }

        .elementor-11 .elementor-element.elementor-element-db323d3>.elementor-element-populated {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-11 .elementor-element.elementor-element-db323d3>.elementor-element-populated {
            margin: 10px 10px 10px 10px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
            padding: 30px 30px 30px 30px;
        }

        .elementor-11 .elementor-element.elementor-element-f99f59b {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-1585028 .elementor-icon-wrapper {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-1585028.elementor-view-default .elementor-icon {
            color: #000;
            border-color: #000;
        }

        .elementor-11 .elementor-element.elementor-element-1585028 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-11 .elementor-element.elementor-element-32fcefe {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-32fcefe .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .elementor-11 .elementor-element.elementor-element-b987214:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap {
            background-color: #f5f5f5;
        }

        .elementor-11 .elementor-element.elementor-element-b987214>.elementor-element-populated {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-11 .elementor-element.elementor-element-b987214>.elementor-element-populated {
            margin: 10px 10px 10px 10px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
            padding: 30px 30px 30px 30px;
        }

        .elementor-11 .elementor-element.elementor-element-ea621fe {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-e64c403 {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-e64c403 .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .elementor-11 .elementor-element.elementor-element-e9be79c:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap {
            background-color: #f5f5f5;
        }

        .elementor-11 .elementor-element.elementor-element-e9be79c>.elementor-element-populated {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-11 .elementor-element.elementor-element-e9be79c>.elementor-element-populated {
            margin: 10px 10px 10px 10px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
            padding: 30px 30px 30px 30px;
        }

        .elementor-11 .elementor-element.elementor-element-e05553e {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-f49f015 {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-f49f015 .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .elementor-11 .elementor-element.elementor-element-d0414c2 {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-d0414c2 .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .elementor-11 .elementor-element.elementor-element-999f3ac {
            text-align: left;
        }

        .elementor-11 .elementor-element.elementor-element-999f3ac .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        @media (min-width:768px) {
            .elementor-11 .elementor-element.elementor-element-7d43a70 {
                width: 41.939%;
            }

            .elementor-11 .elementor-element.elementor-element-4d5cfc5 {
                width: 58.061%;
            }
        }

        @media (max-width:1024px) {
            .elementor-11 .elementor-element.elementor-element-b026ad1 {
                padding: 150px 0px 80px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-0f09e93.elementor-column {
                -webkit-box-ordinal-group: calc(2 + 1);
                -ms-flex-order: 2;
                order: 2;
            }

            .elementor-11 .elementor-element.elementor-element-0f09e93>.elementor-element-populated {
                padding: 0% 2% 0% 28%;
            }

            .elementor-11 .elementor-element.elementor-element-0a5ba65 .elementor-headline {
                text-align: left;
                font-size: 62px;
            }

            .elementor-11 .elementor-element.elementor-element-0a5ba65>.elementor-widget-container {
                margin: -14px 0px -50px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-93b3d19 .elementor-headline {
                text-align: left;
                font-size: 62px;
            }

            .elementor-11 .elementor-element.elementor-element-93b3d19>.elementor-widget-container {
                margin: -14px 0px -50px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-b5c59b2 .elementor-headline {
                text-align: left;
                font-size: 62px;
            }

            .elementor-11 .elementor-element.elementor-element-b5c59b2>.elementor-widget-container {
                margin: -14px 0px -36px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-cb88bff {
                text-align: left;
            }

            .elementor-11 .elementor-element.elementor-element-cb88bff>.elementor-widget-container {
                margin: 0px 110px -22px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-7d43a70>.elementor-element-populated {
                padding: 0px 10px 0px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(5px / 2);
            }

            .elementor-11 .elementor-element.elementor-element-02cc9ec .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(5px / 2);
            }

            .elementor-11 .elementor-element.elementor-element-4d5cfc5>.elementor-element-populated {
                padding: 0px 0px 0px 10px;
            }

            .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(5px / 2);
            }

            .elementor-11 .elementor-element.elementor-element-8acbf1c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(5px / 2);
            }

            .elementor-11 .elementor-element.elementor-element-f0049d8.elementor-column {
                -webkit-box-ordinal-group: calc(1 + 1);
                -ms-flex-order: 1;
                order: 1;
            }

            .elementor-11 .elementor-element.elementor-element-80c8124 img {
                width: 500px;
            }

            .elementor-11 .elementor-element.elementor-element-80c8124>.elementor-widget-container {
                margin: 0px 0px 0px 50px;
            }

            .elementor-11 .elementor-element.elementor-element-66faaea img {
                width: 470px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-66faaea {
                left: 20.455%;
            }

            .elementor-11 .elementor-element.elementor-element-66faaea {
                top: 24px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-cb46634 {
                left: 41.043%;
            }

            .elementor-11 .elementor-element.elementor-element-cb46634 {
                top: 119px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-c522313 {
                left: 76.646%;
            }

            .elementor-11 .elementor-element.elementor-element-c522313 {
                top: 212px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-124ab84 {
                left: 27.273%;
            }

            .elementor-11 .elementor-element.elementor-element-124ab84 {
                top: 534px;
            }

            .elementor-11 .elementor-element.elementor-element-0567052 {
                padding: 0px 15px 0px 15px;
            }

            .elementor-11 .elementor-element.elementor-element-365d6c3 {
                margin-top: -60px;
                margin-bottom: 0px;
            }

            .elementor-11 .elementor-element.elementor-element-6fe5a0c {
                --e-image-carousel-slides-to-show: 3;
            }

            .elementor-11 .elementor-element.elementor-element-a562577 {
                padding: 40px 15px 0px 15px;
            }

            .elementor-11 .elementor-element.elementor-element-d97ea07 {
                padding: 10px 15px 0px 15px;
            }

            .elementor-11 .elementor-element.elementor-element-32fcefe .elementor-heading-title {
                font-size: 20px;
            }

            .elementor-11 .elementor-element.elementor-element-e64c403 .elementor-heading-title {
                font-size: 20px;
            }

            .elementor-11 .elementor-element.elementor-element-f49f015 .elementor-heading-title {
                font-size: 20px;
            }

            .elementor-11 .elementor-element.elementor-element-d0414c2 .elementor-heading-title {
                font-size: 20px;
            }

            .elementor-11 .elementor-element.elementor-element-999f3ac .elementor-heading-title {
                font-size: 20px;
            }
        }

        @media (max-width:767px) {
            .elementor-11 .elementor-element.elementor-element-b026ad1 {
                padding: 40px 0px 80px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-0f09e93>.elementor-element-populated {
                padding: 0% 4% 0% 4%;
            }

            .elementor-11 .elementor-element.elementor-element-0a5ba65 .elementor-headline {
                font-size: 38px;
                line-height: 60px;
            }

            .elementor-11 .elementor-element.elementor-element-0a5ba65>.elementor-widget-container {
                margin: -15px 0px -52px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-93b3d19 .elementor-headline {
                font-size: 38px;
                line-height: 60px;
            }

            .elementor-11 .elementor-element.elementor-element-93b3d19>.elementor-widget-container {
                margin: -15px 0px -52px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-b5c59b2 .elementor-headline {
                font-size: 38px;
                line-height: 60px;
            }

            .elementor-11 .elementor-element.elementor-element-b5c59b2>.elementor-widget-container {
                margin: -15px 0px -38px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-cb88bff>.elementor-widget-container {
                margin: 0px 0px -12px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-cb88bff {
                width: 100%;
                max-width: 100%;
            }

            .elementor-11 .elementor-element.elementor-element-4d5cfc5>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-8acbf1c>.elementor-widget-container {
                margin: 5px 0px 0px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-80c8124 img {
                width: 217px;
            }

            .elementor-11 .elementor-element.elementor-element-66faaea img {
                width: 205px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-66faaea {
                left: 17.077%;
            }

            .elementor-11 .elementor-element.elementor-element-66faaea {
                top: 24px;
            }

            .elementor-11 .elementor-element.elementor-element-cb46634 .elementor-icon {
                font-size: 16px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-cb46634 {
                left: 21.103%;
            }

            .elementor-11 .elementor-element.elementor-element-cb46634 {
                top: 248px;
            }

            .elementor-11 .elementor-element.elementor-element-c522313 .elementor-icon {
                font-size: 16px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-c522313 {
                left: 65.078%;
            }

            .elementor-11 .elementor-element.elementor-element-c522313 {
                top: 245px;
            }

            .elementor-11 .elementor-element.elementor-element-124ab84 .elementor-icon {
                font-size: 16px;
            }

            body:not(.rtl) .elementor-11 .elementor-element.elementor-element-124ab84 {
                left: 35.161%;
            }

            .elementor-11 .elementor-element.elementor-element-124ab84 {
                top: 54px;
            }

            .elementor-11 .elementor-element.elementor-element-ab865fd>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-11 .elementor-element.elementor-element-365d6c3 {
                margin-top: -55px;
                margin-bottom: 0px;
            }

            .elementor-11 .elementor-element.elementor-element-25a5c04 .elementor-heading-title {
                font-size: 18px;
            }

            .elementor-11 .elementor-element.elementor-element-a36cda4 .elementor-heading-title {
                font-size: 14px;
            }

            .elementor-11 .elementor-element.elementor-element-6fe5a0c {
                --e-image-carousel-slides-to-show: 2;
            }

            .elementor-11 .elementor-element.elementor-element-52cd2bb {
                text-align: center;
            }

            .elementor-11 .elementor-element.elementor-element-52cd2bb .elementor-heading-title {
                font-size: 18px;
            }

            .elementor-11 .elementor-element.elementor-element-1a14f38 {
                text-align: center;
                font-size: 14px;
            }

            .elementor-11 .elementor-element.elementor-element-f99f59b {
                text-align: center;
            }

            .elementor-11 .elementor-element.elementor-element-ea621fe {
                text-align: center;
            }

            .elementor-11 .elementor-element.elementor-element-e05553e {
                text-align: center;
            }
        }

        @media (max-width:1024px) and (min-width:768px) {
            .elementor-11 .elementor-element.elementor-element-0f09e93 {
                width: 100%;
            }

            .elementor-11 .elementor-element.elementor-element-7d43a70 {
                width: 30%;
            }

            .elementor-11 .elementor-element.elementor-element-4d5cfc5 {
                width: 50%;
            }

            .elementor-11 .elementor-element.elementor-element-f0049d8 {
                width: 100%;
            }
        }

        .elementor-17 .elementor-element.elementor-element-116876e:not(.elementor-motion-effects-element-type-background) {
            background-color: #fff;
        }

        .elementor-17 .elementor-element.elementor-element-116876e {
            border-radius: 6px 6px 6px 6px;
        }

        .elementor-17 .elementor-element.elementor-element-c4b0ff1>.elementor-element-populated {
            padding: 10px 10px 10px 30px;
        }

        .elementor-17 .elementor-element.elementor-element-f469d44.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-menu-toggle {
            margin-left: auto;
            background-color: var(--e-global-color-2454fa6);
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu .elementor-item {
            font-family: "Archivo", Sans-serif;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--main .elementor-item {
            color: #000;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: var(--e-global-color-2454fa6);
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .e--pointer-underline .elementor-item:after {
            height: 2px;
        }

        body:not(.rtl) .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child) {
            margin-right: 13px;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--dropdown {
            background-color: #f5f5f5;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: "Poppins", Sans-serif;
            font-weight: 500;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--dropdown li:not(:last-child) {
            border-style: solid;
            border-color: #d8d8d8;
            border-bottom-width: 1px;
        }

        .elementor-17 .elementor-element.elementor-element-c851fc9 div.elementor-menu-toggle {
            color: #fff;
        }

        .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column>.elementor-widget-wrap {
            justify-content: flex-end;
        }

        .elementor-17 .elementor-element.elementor-element-a805296 .elementor-button {
            font-family: "Archivo", Sans-serif;
            font-weight: 400;
            fill: var(--e-global-color-7204f65);
            color: var(--e-global-color-7204f65);
            background-color: var(--e-global-color-7a04a83);
            border-radius: 6px 6px 6px 6px;
            padding: 12px 20px 12px 20px;
        }

        .elementor-17 .elementor-element.elementor-element-a805296 {
            width: initial;
            max-width: initial;
        }

        .elementor-17 .elementor-element.elementor-element-b7b4b91 .elementor-button {
            font-family: "Archivo", Sans-serif;
            font-weight: 400;
            fill: #fff;
            color: #fff;
            background-color: var(--e-global-color-7204f65);
            border-radius: 6px 6px 6px 6px;
            padding: 12px 20px 12px 20px;
        }

        .elementor-17 .elementor-element.elementor-element-b7b4b91>.elementor-widget-container {
            margin: 0px 0px 0px 10px;
        }

        .elementor-17 .elementor-element.elementor-element-b7b4b91 {
            width: initial;
            max-width: initial;
        }

        .elementor-17 .elementor-element.elementor-element-8f409a1:not(.elementor-motion-effects-element-type-background) {
            background-color: #fff;
        }

        .elementor-17 .elementor-element.elementor-element-8f409a1 {
            box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, .12);
        }

        .elementor-17 .elementor-element.elementor-element-0bd3f9a {
            text-align: left;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-menu-toggle {
            margin-left: auto;
            background-color: var(--e-global-color-2454fa6);
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu .elementor-item {
            font-family: "Archivo", Sans-serif;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--main .elementor-item {
            color: #000;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: var(--e-global-color-2454fa6);
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .e--pointer-underline .elementor-item:after {
            height: 2px;
        }

        body:not(.rtl) .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child) {
            margin-right: 18px;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--dropdown {
            background-color: #f5f5f5;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--dropdown .elementor-item,
        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: "Poppins", Sans-serif;
            font-weight: 500;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--dropdown li:not(:last-child) {
            border-style: solid;
            border-color: #d8d8d8;
            border-bottom-width: 1px;
        }

        .elementor-17 .elementor-element.elementor-element-493b10c div.elementor-menu-toggle {
            color: #fff;
        }

        @media (max-width:1024px) {
            .elementor-17 .elementor-element.elementor-element-c4b0ff1.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-17 .elementor-element.elementor-element-c4b0ff1.elementor-column {
                -webkit-box-ordinal-group: calc(1 + 1);
                -ms-flex-order: 1;
                order: 1;
            }

            .elementor-17 .elementor-element.elementor-element-c4b0ff1>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-f469d44.elementor-column {
                -webkit-box-ordinal-group: calc(3 + 1);
                -ms-flex-order: 3;
                order: 3;
            }

            .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 30px !important;
            }

            .elementor-17 .elementor-element.elementor-element-c851fc9>.elementor-widget-container {
                margin: 0px 0px -8px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column {
                -webkit-box-ordinal-group: calc(2 + 1);
                -ms-flex-order: 2;
                order: 2;
            }

            .elementor-17 .elementor-element.elementor-element-c0c4a30.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-17 .elementor-element.elementor-element-0bd3f9a>.elementor-widget-container {
                margin: 0px 0px -20px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-948d89b.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 23px !important;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c>.elementor-widget-container {
                margin: 0px 0px -8px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c {
                z-index: 9999999;
            }
        }

        @media (min-width:768px) {
            .elementor-17 .elementor-element.elementor-element-c4b0ff1 {
                width: 15.506%;
            }

            .elementor-17 .elementor-element.elementor-element-f469d44 {
                width: 54.824%;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4 {
                width: 28.688%;
            }
        }

        @media (max-width:1024px) and (min-width:768px) {
            .elementor-17 .elementor-element.elementor-element-c4b0ff1 {
                width: 24%;
            }

            .elementor-17 .elementor-element.elementor-element-f469d44 {
                width: 8%;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4 {
                width: 68%;
            }
        }

        @media (max-width:767px) {
            .elementor-17 .elementor-element.elementor-element-c4b0ff1 {
                width: 80%;
            }

            .elementor-17 .elementor-element.elementor-element-c4b0ff1.elementor-column {
                -webkit-box-ordinal-group: calc(1 + 1);
                -ms-flex-order: 1;
                order: 1;
            }

            .elementor-17 .elementor-element.elementor-element-c4b0ff1>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-462e1ab {
                text-align: left;
            }

            .elementor-17 .elementor-element.elementor-element-462e1ab img {
                width: 180px;
            }

            .elementor-17 .elementor-element.elementor-element-f469d44 {
                width: 20%;
            }

            .elementor-17 .elementor-element.elementor-element-f469d44.elementor-column {
                -webkit-box-ordinal-group: calc(2 + 1);
                -ms-flex-order: 2;
                order: 2;
            }

            .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-17 .elementor-element.elementor-element-c851fc9 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 86px !important;
            }

            .elementor-17 .elementor-element.elementor-element-c851fc9 {
                z-index: 9;
            }

            .elementor-17 .elementor-element.elementor-element-c90e5a4.elementor-column {
                -webkit-box-ordinal-group: calc(3 + 1);
                -ms-flex-order: 3;
                order: 3;
            }

            .elementor-17 .elementor-element.elementor-element-8f409a1 {
                padding: 0px 0px 20px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-c0c4a30 {
                width: 80%;
            }

            .elementor-17 .elementor-element.elementor-element-0bd3f9a {
                text-align: left;
            }

            .elementor-17 .elementor-element.elementor-element-0bd3f9a img {
                width: 145px;
            }

            .elementor-17 .elementor-element.elementor-element-948d89b {
                width: 20%;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-17 .elementor-element.elementor-element-493b10c .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 48px !important;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c>.elementor-widget-container {
                margin: 18px 0px 0px 0px;
            }

            .elementor-17 .elementor-element.elementor-element-493b10c {
                z-index: 9999999;
            }
        }

        .hm {
            font-family: "Happy Icons" !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .hm-rocket2:before {
            content: "";
        }

        .fa-circle:before {
            content: "\f111";
        }

        .elementor-331 .elementor-element.elementor-element-e97e083 {
            text-align: center;
            width: 430px;
            max-width: 430px;
            top: 50%;
            z-index: 999;
            --ha-tfx-rotate-z: -90deg;
        }

        .elementor-331 .elementor-element.elementor-element-e97e083 .elementor-heading-title {
            color: #fff;
            font-family: "Archivo", Sans-serif;
            font-size: 20px;
            font-weight: 700;
        }

        .elementor-331 .elementor-element.elementor-element-e97e083>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 25px 20px 25px;
            background-color: #000;
            border-radius: 20px 20px 0px 0px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, .14);
        }

        body:not(.rtl) .elementor-331 .elementor-element.elementor-element-e97e083 {
            right: -188.6px;
        }

        .elementor-331 .elementor-element.elementor-element-4cf66e6 img {
            width: 88px;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #cbcbcb;
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-331 .elementor-element.elementor-element-4cf66e6>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-331 .elementor-element.elementor-element-4cf66e6 {
            width: initial;
            max-width: initial;
            top: 34%;
            z-index: 99999;
        }

        body:not(.rtl) .elementor-331 .elementor-element.elementor-element-4cf66e6 {
            left: -1.5%;
        }

        @media (max-width:1024px) {
            body:not(.rtl) .elementor-331 .elementor-element.elementor-element-4cf66e6 {
                left: .466%;
            }

            .elementor-331 .elementor-element.elementor-element-4cf66e6 {
                top: 52%;
            }
        }

        @media (max-width:767px) {
            .elementor-331 .elementor-element.elementor-element-4cf66e6 img {
                width: 58px;
                border-width: 0px 0px 0px 0px;
            }

            body:not(.rtl) .elementor-331 .elementor-element.elementor-element-4cf66e6 {
                left: .247%;
            }

            .elementor-331 .elementor-element.elementor-element-4cf66e6 {
                top: 19.288%;
            }
        }

        @import url("//fonts.googleapis.com/css?family=Archivo:400|Montserrat:100");

        .pum-container,
        .pum-content,
        .pum-content+.pum-close,
        .pum-overlay {
            background: 0 0;
            border: none;
            bottom: auto;
            clear: none;
            float: none;
            font-family: inherit;
            font-size: medium;
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: auto;
            letter-spacing: normal;
            line-height: normal;
            max-height: none;
            max-width: none;
            min-height: 0;
            min-width: 0;
            overflow: visible;
            position: static;
            right: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            top: auto;
            visibility: visible;
            white-space: normal;
            width: auto;
            z-index: auto;
        }

        .pum-content {
            position: relative;
            z-index: 1;
        }

        .pum-overlay {
            position: fixed;
        }

        .pum-overlay {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1999999999;
            overflow: initial;
            display: none;
        }

        .pum-overlay,
        .pum-overlay *,
        .pum-overlay :after,
        .pum-overlay :before,
        .pum-overlay:after,
        .pum-overlay:before {
            box-sizing: border-box;
        }

        .pum-container {
            top: 100px;
            position: absolute;
            margin-bottom: 3em;
            z-index: 1999999999;
        }

        .pum-container.pum-responsive {
            left: 50%;
            margin-left: -47.5%;
            width: 95%;
            height: auto;
            overflow: visible;
        }

        .pum-container.pum-responsive img {
            max-width: 100%;
            height: auto;
        }

        @media only screen and (min-width:1024px) {
            .pum-container.pum-responsive.pum-responsive-medium {
                margin-left: -30%;
                width: 60%;
            }
        }

        .pum-container .pum-content>:last-child {
            margin-bottom: 0;
        }

        .pum-container .pum-content>:first-child {
            margin-top: 0;
        }

        .pum-container .pum-content+.pum-close {
            text-decoration: none;
            text-align: center;
            line-height: 1;
            position: absolute;
            min-width: 1em;
            z-index: 2;
            background-color: transparent;
        }

        .pum-overlay.pum-overlay-disabled {
            visibility: hidden;
        }

        .pum-overlay.pum-overlay-disabled::-webkit-scrollbar {
            display: block;
        }

        .pum-overlay.pum-overlay-disabled .pum-container {
            visibility: visible;
        }

        .pum-theme-1030,
        .pum-theme-lightbox {
            background-color: rgba(0, 0, 0, .6);
        }

        .pum-theme-1030 .pum-container,
        .pum-theme-lightbox .pum-container {
            padding: 18px;
            border-radius: 6px;
            border: 8px none #000;
            box-shadow: 0px 0px 30px 0px rgba(2, 2, 2, 1);
            background-color: rgba(255, 255, 255, 1);
        }

        .pum-theme-1030 .pum-content,
        .pum-theme-lightbox .pum-content {
            color: #000;
            font-family: Archivo;
            font-weight: 400;
        }

        .pum-theme-1030 .pum-content+.pum-close,
        .pum-theme-lightbox .pum-content+.pum-close {
            position: absolute;
            height: 50px;
            width: 50px;
            left: auto;
            right: 10px;
            bottom: auto;
            top: 10px;
            padding: 0px;
            color: #fff;
            font-family: Arial;
            font-weight: 100;
            font-size: 32px;
            line-height: 32px;
            border: 2px none #fff;
            border-radius: 26px;
            box-shadow: 0px 0px 0px 0px rgba(2, 2, 2, .75);
            text-shadow: 0px 0px 0px rgba(0, 0, 0, .76);
            background-color: rgba(248, 149, 22, 1);
        }

        #pum-1822 {
            z-index: 1999999999;
        }

        #pum-1040 {
            z-index: 1999999999;
        }

        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .fa-circle:before {
            content: "\f111";
        }

        .fa-dot-circle:before {
            content: "";
        }

        .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
        }

        .hm {
            font-family: "Happy Icons" !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .hm-rocket2:before {
            content: "";
        }

        .hm {
            font-family: "Happy Icons" !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .hm-rocket2:before {
            content: "";
        }

        .first-row,
        .secondrow {
            display: inline-block;
            vertical-align: middle;
        }

        .secondrow {
            width: 50%;
            padding-left: 20px;
        }

        .first-row {
            width: 45%;
        }

        div#popmake-1040 {
            padding: 0;
        }

        .secondrow p {
            font-size: 40px;
            color: #000;
            font-weight: 700;
            margin-bottom: 0;
        }

        button#wpforms-submit-1044 {
            color: #fff;
            background: #f89516;
            min-width: 180px;
            width: auto;
            padding: 0;
            border-radius: 10px;
            font-weight: 600;
            border: 2px solid #f89516;
            height: 50px;
        }

        button#wpforms-submit-1044 {
            color: #fff;
            background: #f89516;
            min-width: 180px;
            width: auto;
            padding: 0;
            border-radius: 10px;
            font-weight: 600;
            border: 2px solid #f89516;
            height: 50px;
        }

        .first-row:before {
            position: absolute;
            content: "";
            background-image: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/optimized/rev-a287064/wp-content/uploads/2022/07/popup-element-1.png");
            width: 314px;
            height: 579px;
            bottom: 0;
        }

        form#wpforms-form-1044 input {
            padding: 10px 10px 10px 20px;
            height: 44px;
            border-radius: 4px;
        }

        li.elementor-icon-list-item {
            align-items: start !important;
        }

        span.elementor-icon-list-text {
            margin-top: -5px;
        }

        .elementor-element.elementor-element-4cf66e6.elementor-widget__width-initial.elementor-fixed.elementor-widget.elementor-widget-image {
            left: 0px !important;
        }

        .profile-img-wrapper {
            display: none;
        }

        .profile-img-wrapper {
            display: none !important;
        }

        div#popmake-1822 h3 {
            color: #000;
            font-family: "Archivo", Sans-serif;
            font-size: 30px;
            font-weight: 700;
            line-height: normal;
        }

        div#popmake-1822 {
            padding: 40px;
        }

        div#popmake-1822 input {
            border-radius: 3px;
            border: solid 1px rgba(151, 151, 151, .2);
            background-color: rgba(216, 216, 216, .2);
            font-size: 14px;
            font-weight: 500;
            color: rgba(34, 34, 34, .6);
            width: 100%;
            height: 54px;
            line-height: 54px;
            margin-bottom: 20px px;
            padding: 0 20px;
        }

        .pum-overlay.pum-overlay-disabled {
            visibility: visible;
        }

        .pum-theme-1030,
        .pum-theme-lightbox {
            background-color: rgba(0, 0, 0, 82%);
        }

        .elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text {
            display: initial !important;
        }

        ul.elementor-icon-list-items {
            margin: 0;
            list-style: none;
        }

        .srvc-bxs .elementor-widget-wrap .srvc-icn img {
            content-visibility: visible;
            opacity: 1;
            height: 70px;
        }

        div#popmake-1822 a.popmake-close.pum-close {
            position: absolute;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            height: 70px;
            left: -291px;
            text-align: center;
            width: 430px;
            max-width: 550px;
            top: 45%;
            webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(270deg);
            margin: 0px 0px 0px 0px;
            padding: 20px 25px 20px 25px;
            background-color: #000;
            border-radius: 20px 20px 0px 0px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 14%);
        }

        a.popmake-close.pum-close span {
            font-size: 24px;
        }

        div#popmake-1822 button.pum-close.popmake-close {
            height: 30px;
            width: 30px;
            font-size: 22px;
        }



        .hdr-innr {
            max-width: 1170px;
            margin: 0 auto;
        }

        .hdr .elementor-widget-wrap {
            background: #fff !important;
            border-radius: 10px;
        }

        .srvc-bxs .elementor-widget-wrap .srvc-icn i {
            content-visibility: visible;
            opacity: 1;
            height: 50px;
        }

        @media only screen and (max-width:1024px) {
            .first-row {
                display: none;
            }

            .secondrow {
                width: 100%;
                padding: 20px;
            }

            .mob-hdr-btn1 {
                background: #f29f03;
                border-radius: 200px !important;
                border: 0 !important;
                margin-left: 32% !important;
                width: 160px !important;
                float: left;
            }

            .mob-hdr-btn1 a {
                justify-content: center !important;
                color: #fff !important;
                border: 0 !important;
            }

            .mob-hdr-btn2 {
                background: #068c73;
                border-radius: 200px !important;
                border: 0 !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
                width: 160px !important;
                float: left;
            }

            .mob-hdr-btn2 a {
                justify-content: center !important;
                color: #fff !important;
                border: 0 !important;
            }

            .mob-menu-last-li {
                padding-bottom: 35px !important;
                border: 0 !important;
            }

            .mob-menu ul:not(.sub-menu) {
                padding-bottom: 20px;
            }
        }

        @media only screen and (max-width:768px) {
            div#popmake-1040 button.pum-close.popmake-close {
                width: 32px;
                height: 32px;
            }

            .mob-hdr-btn1 {
                margin-left: 25% !important;
            }

            .first-row:before {
                display: none;
            }

            .first-row {
                display: none;
            }

            .secondrow {
                width: 100%;
                padding: 20px;
            }

            .secondrow p {
                font-size: 30px;
            }
        }

        @media only screen and (max-width:600px) {
            .mob-hdr-btn1 {
                margin-left: 20% !important;
            }
        }

        @media only screen and (max-width:500px) {
            .mob-hdr-btn1 {
                margin-left: 14% !important;
            }
        }

        @media only screen and (max-width:450px) {
            .mob-hdr-btn1 {
                margin-left: 10% !important;
            }
        }

        @media only screen and (max-width:415px) {
            .mob-hdr-btn1 {
                width: 42% !important;
                margin-left: 20px !important;
            }

            .mob-hdr-btn2 {
                width: 42% !important;
                margin-left: 20px !important;
            }
        }

        @media only screen and (max-width:375px) {
            .mob-hdr-btn1 {
                width: 38% !important;
                margin-left: 20px !important;
            }

            .mob-hdr-btn2 {
                width: 38% !important;
                margin-left: 40px !important;
            }
        }

        @media only screen and (max-width:350px) {
            .mob-hdr-btn1 {
                width: 40% !important;
                margin-left: 20px !important;
            }

            .mob-hdr-btn2 {
                width: 40% !important;
                margin-left: 20px !important;
            }
        }

        .elementor-widget-image {
            text-align: center;
        }

        .elementor-widget-image a {
            display: inline-block;
        }

        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block;
        }

        .elementor-widget .elementor-icon-list-items {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .elementor-widget .elementor-icon-list-item {
            margin: 0;
            padding: 0;
            position: relative;
        }

        .elementor-widget .elementor-icon-list-item:after {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .elementor-widget .elementor-icon-list-item,
        .elementor-widget .elementor-icon-list-item a {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: inherit;
        }

        .elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text {
            -ms-flex-item-align: center;
            align-self: center;
            padding-left: 5px;
        }

        .elementor-widget .elementor-icon-list-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .elementor-widget .elementor-icon-list-icon i {
            width: 1.25em;
            font-size: var(--e-icon-list-icon-size);
        }

        .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
            text-align: var(--e-icon-list-icon-align);
        }

        .elementor-widget.elementor-list-item-link-full_width a {
            width: 100%;
        }

        .elementor-widget.elementor-align-center .elementor-icon-list-item,
        .elementor-widget.elementor-align-center .elementor-icon-list-item a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
            margin: auto;
        }

        .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
            left: 0;
        }

        .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
            right: 0;
        }

        @media (min-width:-1px) {
            .elementor-widget:not(.elementor-widescreen-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-widescreen-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        @media (max-width:-1px) {
            .elementor-widget:not(.elementor-laptop-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-laptop-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        @media (max-width:-1px) {
            .elementor-widget:not(.elementor-tablet_extra-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-tablet_extra-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        @media (max-width:1024px) {
            .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
                text-align: left;
            }

            .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        @media (max-width:-1px) {
            .elementor-widget:not(.elementor-mobile_extra-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-mobile_extra-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        @media (max-width:767px) {
            .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                left: 0;
            }

            .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                right: 0;
            }
        }

        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1;
        }

        .elementor-widget-image-carousel .swiper-container {
            position: static;
        }

        .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
            line-height: inherit;
        }

        .elementor-widget-image-carousel .swiper-slide {
            text-align: center;
        }

        .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
            max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3));
        }

        .elementor-image-gallery .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .elementor-image-gallery .gallery-item img {
            margin: 0 auto;
        }

        .elementor-image-gallery figure img {
            display: block;
        }

        .gallery-spacing-custom .elementor-image-gallery .gallery-icon {
            padding: 0;
        }

        @media (min-width:768px) {
            .elementor-image-gallery .gallery-columns-4 .gallery-item {
                max-width: 25%;
            }
        }

        @media (min-width:480px) and (max-width:767px) {
            .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item {
                max-width: 50%;
            }
        }

        @media (max-width:479px) {
            .elementor-image-gallery .gallery.gallery-columns-4 .gallery-item {
                max-width: 100%;
            }
        }

        .elementor-1146 .elementor-element.elementor-element-93d0d5d .elementor-swiper-button.elementor-swiper-button-prev,
        .elementor-1146 .elementor-element.elementor-element-93d0d5d .elementor-swiper-button.elementor-swiper-button-next {
            color: #000;
        }

        .elementor-1146 .elementor-element.elementor-element-93d0d5d .elementor-image-carousel-wrapper .elementor-image-carousel .swiper-slide-image {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-1146 .elementor-element.elementor-element-93d0d5d {
            z-index: 11;
        }

        .elementor-1146 .elementor-element.elementor-element-d4d9597:not(.elementor-motion-effects-element-type-background) {
            background-color: #fdf7ec;
        }

        .elementor-1146 .elementor-element.elementor-element-d4d9597 {
            padding: 50px 0px 50px 0px;
        }

        .elementor-1146 .elementor-element.elementor-element-4874328 {
            text-align: center;
        }

        .elementor-1146 .elementor-element.elementor-element-4874328 .elementor-heading-title {
            color: var(--e-global-color-7204f65);
            font-family: "Archivo", Sans-serif;
            font-size: 38px;
            font-weight: 700;
            line-height: 46px;
        }

        .elementor-1146 .elementor-element.elementor-element-4470f5a {
            text-align: center;
            color: #000;
            font-family: "Archivo", Sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 22px;
        }

        .elementor-1146 .elementor-element.elementor-element-4470f5a>.elementor-widget-container {
            margin: 0px 0px -22px 0px;
        }

        .elementor-1146 .elementor-element.elementor-element-dc2ff1a .gallery-item {
            padding: 0 20px 20px 0;
        }

        .elementor-1146 .elementor-element.elementor-element-dc2ff1a .gallery {
            margin: 0 -20px -20px 0;
        }

        .elementor-1146 .elementor-element.elementor-element-dc2ff1a .gallery-item img {
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #c8c8c8;
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-1146 .elementor-element.elementor-element-dc2ff1a>.elementor-widget-container {
            margin: 30px 0px 0px 0px;
        }

        .elementor-1146 .elementor-element.elementor-element-9449341 .elementor-button {
            font-family: "Archivo", Sans-serif;
            fill: #fff;
            color: #fff;
            background-color: #2b2822;
            border-radius: 8px 8px 8px 8px;
            padding: 16px 20px 16px 20px;
        }

        .elementor-1146 .elementor-element.elementor-element-9449341>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-1146 .elementor-element.elementor-element-5702e03 {
            --e-icon-list-icon-size: 22px;
        }

        .elementor-1146 .elementor-element.elementor-element-5702e03 .elementor-icon-list-text {
            color: #2b2822;
        }

        .elementor-1146 .elementor-element.elementor-element-5702e03 .elementor-icon-list-item>a {
            font-family: "Inter", Sans-serif;
            font-size: 32px;
            font-weight: 700;
            text-decoration: none;
        }

        .elementor-1146 .elementor-element.elementor-element-5702e03>.elementor-widget-container {
            margin: -18px 0px -5px 0px;
        }

        @media (max-width:1024px) {
            .elementor-1146 .elementor-element.elementor-element-4874328 .elementor-heading-title {
                font-size: 28px;
            }
        }

        @media (max-width:767px) {
            .elementor-1146 .elementor-element.elementor-element-d4d9597 {
                padding: 30px 0px 30px 0px;
            }

            .elementor-1146 .elementor-element.elementor-element-4874328 .elementor-heading-title {
                font-size: 22px;
                line-height: 30px;
            }

            .elementor-1146 .elementor-element.elementor-element-4470f5a {
                font-size: 14px;
            }

            .elementor-1146 .elementor-element.elementor-element-5702e03 .elementor-icon-list-item>a {
                font-size: 22px;
            }
        }

        .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%;
        }

        .gallery-columns-4 .gallery-item {
            max-width: 25%;
        }

        .gallery-icon {
            border-bottom: 0;
            border-radius: 2px 2px 0 0;
            border: 1px solid #eaeaea;
            overflow: hidden;
        }

        .gallery-item {
            margin: 0;
            padding: 10px;
            border-radius: 2px;
        }

        .gallery-item:last-child {
            margin-bottom: 2em;
        }

        .elementor-image-gallery .gallery-icon {
            border: none;
        }

        .rl-gallery .rl-gallery-item {
            overflow: hidden;
        }

        .rl-gallery .rl-gallery-link {
            position: relative;
            display: block;
        }

        .rl-gallery .rl-gallery-link,
        .rl-gallery .rl-gallery-link img {
            border: none;
            outline: none;
            box-shadow: none;
        }

        .rl-gallery .rl-gallery-link img {
            z-index: 0;
        }

        .rl-gallery:not(.rl-hidden-text) .rl-gallery-link:after {
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 1;
            background-color: rgba(0, 0, 0, .8);
            display: block;
            content: "";
            filter: "alpha(opacity=0)";
            opacity: 0;
            top: 0;
            left: 0;
        }

        .rl-loading {
            opacity: .5;
        }

        .rl-gallery .rl-gallery-link {
            border: 0px solid #000;
        }

        .rl-gallery .rl-gallery-link:after {
            background-color: rgba(0, 0, 0, .8);
        }

        .rl-basicgrid-gallery {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .rl-basicgrid-gallery:after {
            content: "";
            flex-grow: 999999999;
            min-width: 300px;
            height: 0;
        }

        .rl-basicgrid-gallery .rl-gallery-item {
            text-decoration: none !important;
            box-shadow: none !important;
            text-align: center;
        }

        .rl-basicgrid-gallery .rl-gallery-item img {
            max-width: 100%;
            display: inline-block;
        }

        #rl-gallery-container-2 .rl-basicgrid-gallery {
            padding: -2px;
        }

        #rl-gallery-container-2 .rl-basicgrid-gallery .rl-gallery-item {
            width: calc(33.333333333333% - 2px);
            margin: 1px;
        }

        @media all and (min-width:1200px) {
            #rl-gallery-container-2 .rl-basicgrid-gallery .rl-gallery-item {
                width: calc(25% - 2px);
            }
        }

        @media all and (min-width:992px) and (max-width:1200px) {
            #rl-gallery-container-2 .rl-basicgrid-gallery .rl-gallery-item {
                width: calc(33.333333333333% - 2px);
            }
        }

        @media all and (min-width:768px) and (max-width:992px) {
            #rl-gallery-container-2 .rl-basicgrid-gallery .rl-gallery-item {
                width: calc(50% - 2px);
            }
        }

        @media all and (max-width:768px) {
            #rl-gallery-container-2 .rl-basicgrid-gallery .rl-gallery-item {
                width: calc(100% - 2px);
            }
        }

        :root {
            --swiper-theme-color: #007aff;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            box-sizing: content-box;
        }

        .swiper-wrapper {
            transform: translate3d(0px, 0, 0);
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
        }

        :root {
            --swiper-navigation-size: 44px;
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }

        .fa-circle:before {
            content: "\f111";
        }

        div.wpforms-container-full,
        div.wpforms-container-full .wpforms-form * {
            background: none;
            border: 0 none;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            float: none;
            font-size: 100%;
            height: auto;
            letter-spacing: normal;
            list-style: none;
            outline: none;
            position: static;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            width: auto;
            visibility: visible;
            overflow: visible;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
        }

        div.wpforms-container-full {
            margin-left: auto;
            margin-right: auto;
        }

        div.wpforms-container-full .wpforms-form input,
        div.wpforms-container-full .wpforms-form label,
        div.wpforms-container-full .wpforms-form button {
            margin: 0;
            border: 0;
            padding: 0;
            display: inline-block;
            vertical-align: middle;
            background: none;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        div.wpforms-container-full .wpforms-form input.wpforms-field-medium {
            max-width: 60%;
        }

        div.wpforms-container-full .wpforms-form input.wpforms-field-large {
            max-width: 100%;
        }

        div.wpforms-container-full .wpforms-form .wpforms-field {
            padding: 10px 0;
            clear: both;
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-label {
            display: block;
            font-weight: 700;
            font-size: 16px;
            float: none;
            line-height: 1.3;
            margin: 0 0 4px 0;
            padding: 0;
        }

        div.wpforms-container-full .wpforms-form .wpforms-required-label {
            color: #f00;
            font-weight: 400;
        }

        div.wpforms-container-full .wpforms-form input[type=email],
        div.wpforms-container-full .wpforms-form input[type=tel],
        div.wpforms-container-full .wpforms-form input[type=text] {
            background-color: #fff;
            box-sizing: border-box;
            border-radius: 2px;
            color: #333;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            display: block;
            float: none;
            font-size: 16px;
            border: 1px solid #ccc;
            padding: 6px 10px;
            height: 38px;
            width: 100%;
            line-height: 1.3;
        }

        div.wpforms-container-full .wpforms-form button[type=submit] {
            background-color: #eee;
            border: 1px solid #ddd;
            color: #333;
            font-size: 1em;
            padding: 10px 15px;
        }

        div.wpforms-container-full .wpforms-form .wpforms-recaptcha-container {
            padding: 10px 0 20px 0;
            clear: both;
        }

        div.wpforms-container-full .wpforms-form .wpforms-submit-container {
            padding: 10px 0 0 0;
            clear: both;
            position: relative;
        }

        div.wpforms-container-full {
            margin-bottom: 24px;
        }

        div.wpforms-container-full .wpforms-form .wpforms-field-hp {
            display: none !important;
            position: absolute !important;
            left: -9000px !important;
        }

        @media only screen and (max-width:600px) {
            div.wpforms-container-full .wpforms-form .wpforms-field {
                overflow-x: hidden;
            }

            div.wpforms-container-full .wpforms-form .wpforms-field>* {
                max-width: 100%;
            }

            div.wpforms-container-full .wpforms-form input.wpforms-field-medium,
            div.wpforms-container-full .wpforms-form input.wpforms-field-large {
                max-width: 100%;
            }
        }
    </style>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Resumein 99 &raquo; Feed" href="feed/" />
    <link rel="alternate" type="application/rss+xml" title="Resumein 99 &raquo; Comments Feed" href="comments/feed/" /> <template data-nitro-marker-id="a28a7a176a11567d81ffad20550bdbb8-1"></template> <template data-nitro-marker-id="jquery-core-js"></template> <template data-nitro-marker-id="jquery-migrate-js"></template> <template data-nitro-marker-id="sp-ea-accordion-js-js"></template> <template data-nitro-marker-id="responsive-lightbox-swipebox-js"></template> <template data-nitro-marker-id="underscore-js"></template> <template data-nitro-marker-id="responsive-lightbox-infinite-scroll-js"></template> <template data-nitro-marker-id="responsive-lightbox-js-extra"></template> <template data-nitro-marker-id="responsive-lightbox-js"></template> <template data-nitro-marker-id="font-awesome-4-shim-js"></template> <template data-nitro-marker-id="she-header-js"></template>
    <link rel="https://api.w.org/" href="wp-json/" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/11" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <link rel="canonical" href="" />
    <link rel='shortlink' href='' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fresumein99.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fresumein99.com%2F&#038;format=xml" /> <template data-nitro-marker-id="05bd6c6a8b4a970ca45535993ab31837-1"></template> <template data-nitro-marker-id="852e7af9498d401103666b70abc5367c-1"></template>
    <link rel="icon" sizes="32x32" href="../favicon.png" />
    <link rel="icon" sizes="192x192" href="../favicon.png" />
    <link rel="apple-touch-icon" href="../favicon.png" /> <template data-nitro-marker-id="67a3d4f5c98dd3fd5d33df916d581a5c-1"></template>
     <!-- <template data-nitro-marker-id="ze-snippet"></template>  -->
     <template data-nitro-marker-id="d784313b470265b3a6330f29b584bffd-1"></template>
    <script nitro-exclude>
        window.IS_NITROPACK = !0;
        window.NITROPACK_STATE = 'FRESH';
    </script>
    <script>
        window.nitro_lazySizesConfig = window.nitro_lazySizesConfig || {};
        window.nitro_lazySizesConfig.lazyClass = "nitro-lazy";
        nitro_lazySizesConfig.srcAttr = "nitro-lazy-src";
        nitro_lazySizesConfig.srcsetAttr = "nitro-lazy-srcset";
        nitro_lazySizesConfig.expand = 10;
        nitro_lazySizesConfig.expFactor = 1;
        nitro_lazySizesConfig.hFac = 1;
        nitro_lazySizesConfig.loadMode = 1;
        nitro_lazySizesConfig.ricTimeout = 50;
        nitro_lazySizesConfig.loadHidden = true;
        (function() {
            var e = null;
            var a = false;
            var t = false;
            var i = {
                childList: false,
                attributes: true,
                subtree: false,
                attributeFilter: ["src"],
                attributeOldValue: true
            };
            var r = null;
            var n = [];

            function o(e) {
                let t = n.indexOf(e);
                if (t > -1) {
                    n.splice(t, 1);
                    r.disconnect();
                    c()
                }
                e.contentWindow.location.replace(e.getAttribute("nitro-og-src"))
            }

            function l() {
                if (!r) {
                    r = new MutationObserver(function(e, a) {
                        e.forEach(n => {
                            if (n.type == "attributes" && n.attributeName == "src") {
                                let t = n.target;
                                let i = t.getAttribute("nitro-og-src");
                                let r = t.src;
                                if (r != i) {
                                    a.disconnect();
                                    let e = r.replace(n.oldValue, "");
                                    if (r.indexOf("data:") === 0 && ["?", "&"].indexOf(e.substr(0, 1)) > -1) {
                                        if (i.indexOf("?") > -1) {
                                            t.setAttribute("nitro-og-src", i + "&" + e.substr(1))
                                        } else {
                                            t.setAttribute("nitro-og-src", i + "?" + e.substr(1))
                                        }
                                    }
                                    t.src = n.oldValue;
                                    c()
                                }
                            }
                        })
                    })
                }
                return r
            }

            function s(e) {
                l().observe(e, i)
            }

            function c() {
                n.forEach(s)
            }

            function u() {
                window.removeEventListener("scroll", u);
                window.nitro_lazySizesConfig.expand = 300
            }
            window.addEventListener("scroll", u, {
                passive: true
            });
            window.addEventListener("NitroStylesLoaded", function() {
                a = true
            });
            window.addEventListener("load", function() {
                t = true
            });
            window.addEventListener("message", function(e) {
                if (e.data.action && e.data.action === "playBtnClicked") {
                    var t = document.getElementsByTagName("iframe");
                    for (var i = 0; i < t.length; i++) {
                        if (e.source === t[i].contentWindow) {
                            o(t[i])
                        }
                    }
                }
            });
            document.addEventListener("lazybeforeunveil", function(t) {
                var i = false;
                var r = t.target.getAttribute("nitro-lazy-bg");
                if (r) {
                    let e = t.target.style.backgroundImage.replace("data:image/gif;base64,R0lGODlhAQABAIABAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==", r.replace(/\(/g, "%28").replace(/\)/g, "%29"));
                    if (e === t.target.style.backgroundImage) {
                        e = "url(" + r.replace(/\(/g, "%28").replace(/\)/g, "%29") + ")"
                    }
                    t.target.style.backgroundImage = e;
                    i = true
                }
                var e = t.target.className.indexOf("elementor-invisible") != -1;
                if (e) {
                    i = true;
                    if (a) {
                        t.target.className = t.target.className.replace("elementor-invisible", "")
                    } else {
                        window.addEventListener("NitroStylesLoaded", function(e) {
                            return function() {
                                e.className = e.className.replace("elementor-invisible", "")
                            }
                        }(t.target))
                    }
                }
                if (!i) {
                    var n = t.target.tagName.toLowerCase();
                    if (n !== "img" && n !== "iframe") {
                        t.target.querySelectorAll("img[nitro-lazy-src],img[nitro-lazy-srcset]").forEach(function(e) {
                            e.classList.add("nitro-lazy")
                        })
                    }
                }
            });
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll("iframe[nitro-og-src]").forEach(t => {
                    if (t.getAttribute("nitro-og-src").indexOf("vimeo") > -1) {
                        t.realGetAttribute = t.getAttribute;
                        Object.defineProperty(t, "src", {
                            value: t.getAttribute("nitro-og-src"),
                            writable: false
                        });
                        Object.defineProperty(t, "getAttribute", {
                            value: function(e) {
                                if (e == "src") {
                                    return t.realGetAttribute("nitro-og-src")
                                } else {
                                    return t.realGetAttribute(e)
                                }
                            },
                            writable: false
                        })
                    }
                    n.push(t)
                });
                c()
            })
        })();
    </script>
    <script id="nitro-lazyloader">
        /*! lazysizes - v5.1.2 */ ! function(a, b) {
            var c = b(a, a.document);
            a.lazySizes = c, "object" == typeof module && module.exports && (module.exports = c)
        }("undefined" != typeof window ? window : {}, function(a, b) {
            "use strict";
            var c, d;
            if (function() {
                    var b, c = {
                        lazyClass: "lazyload",
                        loadedClass: "lazyloaded",
                        loadingClass: "lazyloading",
                        preloadClass: "lazypreload",
                        errorClass: "lazyerror",
                        autosizesClass: "lazyautosizes",
                        srcAttr: "data-src",
                        srcsetAttr: "data-srcset",
                        sizesAttr: "data-sizes",
                        minSize: 40,
                        customMedia: {},
                        init: !0,
                        expFactor: 1.5,
                        hFac: .8,
                        loadMode: 2,
                        loadHidden: !0,
                        ricTimeout: 0,
                        throttleDelay: 125
                    };
                    d = a.nitro_lazySizesConfig || a.nitro_lazysizesConfig || {};
                    for (b in c) b in d || (d[b] = c[b])
                }(), !b || !b.getElementsByClassName) return {
                init: function() {},
                cfg: d,
                noSupport: !0
            };
            var e = b.documentElement,
                f = a.Date,
                g = a.HTMLPictureElement,
                h = "addEventListener",
                i = "getAttribute",
                j = a[h],
                k = a.setTimeout,
                l = a.requestAnimationFrame || k,
                m = a.requestIdleCallback,
                n = /^picture$/i,
                o = ["load", "error", "lazyincluded", "_lazyloaded"],
                p = {},
                q = Array.prototype.forEach,
                r = function(a, b) {
                    return p[b] || (p[b] = new RegExp("(\\s|^)" + b + "(\\s|$)")), p[b].test(a[i]("class") || "") && p[b]
                },
                s = function(a, b) {
                    r(a, b) || a.setAttribute("class", (a[i]("class") || "").trim() + " " + b)
                },
                t = function(a, b) {
                    var c;
                    (c = r(a, b)) && a.setAttribute("class", (a[i]("class") || "").replace(c, " "))
                },
                u = function(a, b, c) {
                    var d = c ? h : "removeEventListener";
                    c && u(a, b), o.forEach(function(c) {
                        a[d](c, b)
                    })
                },
                v = function(a, d, e, f, g) {
                    var h = b.createEvent("Event");
                    return e || (e = {}), e.instance = c, h.initEvent(d, !f, !g), h.detail = e, a.dispatchEvent(h), h
                },
                w = function(b, c) {
                    var e;
                    !g && (e = a.picturefill || d.pf) ? (c && c.src && !b[i]("srcset") && b.setAttribute("srcset", c.src), e({
                        reevaluate: !0,
                        elements: [b]
                    })) : c && c.src && (b.src = c.src)
                },
                x = function(a, b) {
                    return (getComputedStyle(a, null) || {})[b]
                },
                y = function(a, b, c) {
                    for (c = c || a.offsetWidth; c < d.minSize && b && !a._lazysizesWidth;) c = b.offsetWidth, b = b.parentNode;
                    return c
                },
                z = function() {
                    var a, c, d = [],
                        e = [],
                        f = d,
                        g = function() {
                            var b = f;
                            for (f = d.length ? e : d, a = !0, c = !1; b.length;) b.shift()();
                            a = !1
                        },
                        h = function(d, e) {
                            a && !e ? d.apply(this, arguments) : (f.push(d), c || (c = !0, (b.hidden ? k : l)(g)))
                        };
                    return h._lsFlush = g, h
                }(),
                A = function(a, b) {
                    return b ? function() {
                        z(a)
                    } : function() {
                        var b = this,
                            c = arguments;
                        z(function() {
                            a.apply(b, c)
                        })
                    }
                },
                B = function(a) {
                    var b, c = 0,
                        e = d.throttleDelay,
                        g = d.ricTimeout,
                        h = function() {
                            b = !1, c = f.now(), a()
                        },
                        i = m && g > 49 ? function() {
                            m(h, {
                                timeout: g
                            }), g !== d.ricTimeout && (g = d.ricTimeout)
                        } : A(function() {
                            k(h)
                        }, !0);
                    return function(a) {
                        var d;
                        (a = !0 === a) && (g = 33), b || (b = !0, d = e - (f.now() - c), d < 0 && (d = 0), a || d < 9 ? i() : k(i, d))
                    }
                },
                C = function(a) {
                    var b, c, d = 99,
                        e = function() {
                            b = null, a()
                        },
                        g = function() {
                            var a = f.now() - c;
                            a < d ? k(g, d - a) : (m || e)(e)
                        };
                    return function() {
                        c = f.now(), b || (b = k(g, d))
                    }
                },
                D = function() {
                    var g, l, m, o, p, y, D, F, G, H, I, J, K = /^img$/i,
                        L = /^iframe$/i,
                        M = "onscroll" in a && !/(gle|ing)bot/.test(navigator.userAgent),
                        N = 0,
                        O = 0,
                        P = 0,
                        Q = -1,
                        R = function(a) {
                            P--, (!a || P < 0 || !a.target) && (P = 0)
                        },
                        S = function(a) {
                            return null == J && (J = "hidden" == x(b.body, "visibility")), J || !("hidden" == x(a.parentNode, "visibility") && "hidden" == x(a, "visibility"))
                        },
                        T = function(a, c) {
                            var d, f = a,
                                g = S(a);
                            for (F -= c, I += c, G -= c, H += c; g && (f = f.offsetParent) && f != b.body && f != e;)(g = (x(f, "opacity") || 1) > 0) && "visible" != x(f, "overflow") && (d = f.getBoundingClientRect(), g = H > d.left && G < d.right && I > d.top - 1 && F < d.bottom + 1);
                            return g
                        },
                        U = function() {
                            var a, f, h, j, k, m, n, p, q, r, s, t, u = c.elements;
                            if ((o = d.loadMode) && P < 8 && (a = u.length)) {
                                for (f = 0, Q++; f < a; f++)
                                    if (u[f] && !u[f]._lazyRace)
                                        if (!M || c.prematureUnveil && c.prematureUnveil(u[f])) aa(u[f]);
                                        else if ((p = u[f][i]("data-expand")) && (m = 1 * p) || (m = O), r || (r = !d.expand || d.expand < 1 ? e.clientHeight > 500 && e.clientWidth > 500 ? 500 : 370 : d.expand, c._defEx = r, s = r * d.expFactor, t = d.hFac, J = null, O < s && P < 1 && Q > 2 && o > 2 && !b.hidden ? (O = s, Q = 0) : O = o > 1 && Q > 1 && P < 6 ? r : N), q !== m && (y = innerWidth + m * t, D = innerHeight + m, n = -1 * m, q = m), h = u[f].getBoundingClientRect(), (I = h.bottom) >= n && (F = h.top) <= D && (H = h.right) >= n * t && (G = h.left) <= y && (I || H || G || F) && (d.loadHidden || S(u[f])) && (l && P < 3 && !p && (o < 3 || Q < 4) || T(u[f], m))) {
                                    if (aa(u[f]), k = !0, P > 9) break
                                } else !k && l && !j && P < 4 && Q < 4 && o > 2 && (g[0] || d.preloadAfterLoad) && (g[0] || !p && (I || H || G || F || "auto" != u[f][i](d.sizesAttr))) && (j = g[0] || u[f]);
                                j && !k && aa(j)
                            }
                        },
                        V = B(U),
                        W = function(a) {
                            var b = a.target;
                            if (b._lazyCache) return void delete b._lazyCache;
                            R(a), s(b, d.loadedClass), t(b, d.loadingClass), u(b, Y), v(b, "lazyloaded")
                        },
                        X = A(W),
                        Y = function(a) {
                            X({
                                target: a.target
                            })
                        },
                        Z = function(a, b) {
                            try {
                                a.contentWindow.location.replace(b)
                            } catch (c) {
                                a.src = b
                            }
                        },
                        $ = function(a) {
                            var b, c = a[i](d.srcsetAttr);
                            (b = d.customMedia[a[i]("data-media") || a[i]("media")]) && a.setAttribute("media", b), c && a.setAttribute("srcset", c)
                        },
                        _ = A(function(a, b, c, e, f) {
                            var g, h, j, l, o, p;
                            (o = v(a, "lazybeforeunveil", b)).defaultPrevented || (e && (c ? s(a, d.autosizesClass) : a.setAttribute("sizes", e)), h = a[i](d.srcsetAttr), g = a[i](d.srcAttr), f && (j = a.parentNode, l = j && n.test(j.nodeName || "")), p = b.firesLoad || "src" in a && (h || g || l), o = {
                                target: a
                            }, s(a, d.loadingClass), p && (clearTimeout(m), m = k(R, 2500), u(a, Y, !0)), l && q.call(j.getElementsByTagName("source"), $), h ? a.setAttribute("srcset", h) : g && !l && (L.test(a.nodeName) ? Z(a, g) : a.src = g), f && (h || l) && w(a, {
                                src: g
                            })), a._lazyRace && delete a._lazyRace, t(a, d.lazyClass), z(function() {
                                var b = a.complete && a.naturalWidth > 1;
                                p && !b || (b && s(a, "ls-is-cached"), W(o), a._lazyCache = !0, k(function() {
                                    "_lazyCache" in a && delete a._lazyCache
                                }, 9)), "lazy" == a.loading && P--
                            }, !0)
                        }),
                        aa = function(a) {
                            if (!a._lazyRace) {
                                var b, c = K.test(a.nodeName),
                                    e = c && (a[i](d.sizesAttr) || a[i]("sizes")),
                                    f = "auto" == e;
                                (!f && l || !c || !a[i]("src") && !a.srcset || a.complete || r(a, d.errorClass) || !r(a, d.lazyClass)) && (b = v(a, "lazyunveilread").detail, f && E.updateElem(a, !0, a.offsetWidth), a._lazyRace = !0, P++, _(a, b, f, e, c))
                            }
                        },
                        ba = C(function() {
                            d.loadMode = 3, V()
                        }),
                        ca = function() {
                            3 == d.loadMode && (d.loadMode = 2), ba()
                        },
                        da = function() {
                            if (!l) {
                                if (f.now() - p < 999) return void k(da, 999);
                                l = !0, d.loadMode = 3, V(), j("scroll", ca, !0)
                            }
                        };
                    return {
                        _: function() {
                            p = f.now(), c.elements = b.getElementsByClassName(d.lazyClass), g = b.getElementsByClassName(d.lazyClass + " " + d.preloadClass), j("scroll", V, !0), j("resize", V, !0), a.MutationObserver ? new MutationObserver(V).observe(e, {
                                childList: !0,
                                subtree: !0,
                                attributes: !0
                            }) : (e[h]("DOMNodeInserted", V, !0), e[h]("DOMAttrModified", V, !0), setInterval(V, 999)), j("hashchange", V, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach(function(a) {
                                b[h](a, V, !0)
                            }), /d$|^c/.test(b.readyState) ? da() : (j("load", da), b[h]("DOMContentLoaded", V), k(da, 2e4)), c.elements.length ? (U(), z._lsFlush()) : V()
                        },
                        checkElems: V,
                        unveil: aa,
                        _aLSL: ca
                    }
                }(),
                E = function() {
                    var a, c = A(function(a, b, c, d) {
                            var e, f, g;
                            if (a._lazysizesWidth = d, d += "px", a.setAttribute("sizes", d), n.test(b.nodeName || ""))
                                for (e = b.getElementsByTagName("source"), f = 0, g = e.length; f < g; f++) e[f].setAttribute("sizes", d);
                            c.detail.dataAttr || w(a, c.detail)
                        }),
                        e = function(a, b, d) {
                            var e, f = a.parentNode;
                            f && (d = y(a, f, d), e = v(a, "lazybeforesizes", {
                                width: d,
                                dataAttr: !!b
                            }), e.defaultPrevented || (d = e.detail.width) && d !== a._lazysizesWidth && c(a, f, e, d))
                        },
                        f = function() {
                            var b, c = a.length;
                            if (c)
                                for (b = 0; b < c; b++) e(a[b])
                        },
                        g = C(f);
                    return {
                        _: function() {
                            a = b.getElementsByClassName(d.autosizesClass), j("resize", g)
                        },
                        checkElems: g,
                        updateElem: e
                    }
                }(),
                F = function() {
                    !F.i && b.getElementsByClassName && (F.i = !0, E._(), D._())
                };
            return k(function() {
                d.init && F()
            }), c = {
                cfg: d,
                autoSizer: E,
                loader: D,
                init: F,
                uP: w,
                aC: s,
                rC: t,
                hC: r,
                fire: v,
                gW: y,
                rAF: z
            }
        });
    </script>
    <script id="a28a7a176a11567d81ffad20550bdbb8-1" type="nitropack/inlinescript" class="nitropack-inline-script">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/resumein99.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"}};
    /*! This file is auto-generated */
    !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode,e=(p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0),i.toDataURL());return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([129777,127995,8205,129778,127999],[129777,127995,8203,129778,127999])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <script id="responsive-lightbox-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var rlArgs = {"script":"swipebox","selector":"lightbox","customEvents":"","activeGalleries":"1","animation":"1","hideCloseButtonOnMobile":"0","removeBarsOnMobile":"0","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080","useSVG":"1","loopAtEnd":"0","woocommerce_gallery":"0","ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","nonce":"90a2202515","preview":"false","postId":"11","scriptExtension":""};
    </script>
    <script id="05bd6c6a8b4a970ca45535993ab31837-1" type="nitropack/inlinescript" class="nitropack-inline-script">jQuery(document).ready(function(){jQuery("#elementor-tab-title-2354").click(function(){jQuery(".port-glry .elementor-item-active").click();return false})});</script>
    <script id="852e7af9498d401103666b70abc5367c-1" type="nitropack/inlinescript" class="nitropack-inline-script">
        jQuery(document).ready(function(){
        
    // 	jQuery(".zen-btn .elementor-icon-list-item").wrap("<a href='javascript:$zopim.livechat.window.show();'></a>");
        
        jQuery(".zen-btn a").attr("href","javascript:$zopim.livechat.window.show()");
        
    });</script>
    
    <script id="e4058a2d687874cdcb2b64cbb490a14f-1" type="nitropack/inlinescript" class="nitropack-inline-script">var script = document.createElement('script');
          script.async = true; script.type = 'text/javascript';
          var target = '#/monitor/stat.js';
          script.src = target;var elem = document.head;elem.appendChild(script);
          </script>
    <script id="e4058a2d687874cdcb2b64cbb490a14f-2" type="nitropack/inlinescript" class="nitropack-inline-script">var script = document.createElement('script');
          script.async = true; script.type = 'text/javascript';
          var target = '#/monitor/stat.js';
          script.src = target;var elem = document.head;elem.appendChild(script);
          </script>
    <script id="astra-theme-js-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var astra = {"break_point":"921","isRtl":""};
    </script>
    <script id="sp-ea-accordion-config-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var sp_easy_accordion_free = {"url":"https:\/\/resumein99.com\/wp-content\/plugins\/easy-accordion-free\/","loadScript":"https:\/\/resumein99.com\/wp-content\/plugins\/easy-accordion-free\/public\/assets\/js\/script.js","link":"https:\/\/resumein99.com\/wp-admin\/post-new.php?post_type=sp_easy_accordion","shortCodeList":[{"id":301,"title":""}]};
    </script>
    <script id="happy-elementor-addons-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var HappyLocalize = {"ajax_url":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","nonce":"71a4465892","pdf_js_lib":"https:\/\/resumein99.com\/wp-content\/plugins\/happy-elementor-addons\/assets\/vendor\/pdfjs\/lib"};
    </script>
    <script id="popup-maker-site-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var pum_vars = {"version":"1.16.7","pm_dir_url":"https:\/\/resumein99.com\/wp-content\/plugins\/popup-maker\/","ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","restapi":"https:\/\/resumein99.com\/wp-json\/pum\/v1","rest_nonce":null,"default_theme":"1029","debug_mode":"","disable_tracking":"","home_url":"\/","message_position":"top","core_sub_forms_enabled":"1","popups":[],"analytics_route":"analytics","analytics_api":"https:\/\/resumein99.com\/wp-json\/pum\/v1"};
    var pum_sub_vars = {"ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","message_position":"top"};
    var pum_popups = {"pum-1822":{"triggers":[{"type":"click_open","settings":{"cookie_name":["pum-1822"],"extra_selectors":".slide"}}],"cookies":[],"disable_on_mobile":false,"disable_on_tablet":false,"atc_promotion":null,"explain":null,"type_section":null,"theme_id":"1030","size":"custom","responsive_min_width":"0px","responsive_max_width":"100px","custom_width":"500px","custom_height_auto":true,"custom_height":"380px","scrollable_content":false,"animation_type":"fadeAndSlide","animation_speed":"600","animation_origin":"right center","open_sound":"none","custom_sound":"","location":"right center","position_top":"100","position_bottom":"10","position_left":"0","position_right":"10","position_from_trigger":false,"position_fixed":true,"overlay_disabled":true,"stackable":true,"disable_reposition":false,"zindex":"1999999999","close_button_delay":"0","fi_promotion":null,"close_on_form_submission":false,"close_on_form_submission_delay":"0","close_on_overlay_click":false,"close_on_esc_press":false,"close_on_f4_press":false,"disable_form_reopen":false,"disable_accessibility":false,"theme_slug":"lightbox","id":1822,"slug":"slide-popup"},"pum-1040":{"triggers":[{"type":"click_open","settings":{"cookie_name":["pum-1040"],"extra_selectors":".popup"}}],"cookies":[],"disable_on_mobile":false,"disable_on_tablet":false,"atc_promotion":null,"explain":null,"type_section":null,"theme_id":"1030","size":"medium","responsive_min_width":"0%","responsive_max_width":"100%","custom_width":"640px","custom_height_auto":false,"custom_height":"380px","scrollable_content":false,"animation_type":"fade","animation_speed":"350","animation_origin":"center top","open_sound":"none","custom_sound":"","location":"center","position_top":"100","position_bottom":"0","position_left":"0","position_right":"0","position_from_trigger":false,"position_fixed":false,"overlay_disabled":false,"stackable":false,"disable_reposition":false,"zindex":"1999999999","close_button_delay":"0","fi_promotion":null,"close_on_form_submission":false,"close_on_form_submission_delay":"0","close_on_overlay_click":false,"close_on_esc_press":false,"close_on_f4_press":false,"disable_form_reopen":false,"disable_accessibility":false,"theme_slug":"lightbox","id":1040,"slug":"get-a-resume"}};
    </script>
    <script id="sgpm-default-embed-code-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var sgpmPopupHashIds = ["103f8508e41f"];
    var SGPM_SERVICE_URL = "https:\/\/popupmaker.com\/";
    </script>
    <script id="elementor-pro-frontend-js-before" type="nitropack/inlinescript" class="nitropack-inline-script">
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","nonce":"ad773c67ea","i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/resumein99.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
    </script>
    <script id="elementor-frontend-js-before" type="nitropack/inlinescript" class="nitropack-inline-script">
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.7","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/resumein99.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":11,"title":"My%20Resume%20Pros","excerpt":"","featuredImage":false}};
    </script>
    <script id="elementor-frontend-js-after" type="nitropack/inlinescript" class="nitropack-inline-script">"use strict";(function(t){var e=t(window),a=function t(i,l,n){var r;return function(){var e=this,a=arguments;var t=function t(){r=null;if(!n)i.apply(e,a)};var s=n&&!r;clearTimeout(r);r=setTimeout(t,l);if(s)i.apply(e,a)}};e.on("elementor/frontend/init",function(){var t=elementorModules.frontend.handlers.Base,e;e=t.extend({bindEvents:function t(){this.run()},getDefaultSettings:function t(){return{direction:"alternate",easing:"easeInOutSine",loop:true,targets:this.findElement(".elementor-widget-container").get(0)}},onElementChange:a(function(t){if(t.indexOf("ha_floating")!==-1){this.anime&&this.anime.restart();this.run()}},400),getFxVal:function t(e){return this.getElementSettings("ha_floating_fx_"+e)},run:function t(){var e=this.getDefaultSettings();if(this.getFxVal("translate_toggle")){if(this.getFxVal("translate_x.size")||this.getFxVal("translate_x.sizes.to")){e.translateX={value:[this.getFxVal("translate_x.sizes.from")||0,this.getFxVal("translate_x.size")||this.getFxVal("translate_x.sizes.to")],duration:this.getFxVal("translate_duration.size"),delay:this.getFxVal("translate_delay.size")||0}}if(this.getFxVal("translate_y.size")||this.getFxVal("translate_y.sizes.to")){e.translateY={value:[this.getFxVal("translate_y.sizes.from")||0,this.getFxVal("translate_y.size")||this.getFxVal("translate_y.sizes.to")],duration:this.getFxVal("translate_duration.size"),delay:this.getFxVal("translate_delay.size")||0}}}if(this.getFxVal("rotate_toggle")){if(this.getFxVal("rotate_x.size")||this.getFxVal("rotate_x.sizes.to")){e.rotateX={value:[this.getFxVal("rotate_x.sizes.from")||0,this.getFxVal("rotate_x.size")||this.getFxVal("rotate_x.sizes.to")],duration:this.getFxVal("rotate_duration.size"),delay:this.getFxVal("rotate_delay.size")||0}}if(this.getFxVal("rotate_y.size")||this.getFxVal("rotate_y.sizes.to")){e.rotateY={value:[this.getFxVal("rotate_y.sizes.from")||0,this.getFxVal("rotate_y.size")||this.getFxVal("rotate_y.sizes.to")],duration:this.getFxVal("rotate_duration.size"),delay:this.getFxVal("rotate_delay.size")||0}}if(this.getFxVal("rotate_z.size")||this.getFxVal("rotate_z.sizes.to")){e.rotateZ={value:[this.getFxVal("rotate_z.sizes.from")||0,this.getFxVal("rotate_z.size")||this.getFxVal("rotate_z.sizes.to")],duration:this.getFxVal("rotate_duration.size"),delay:this.getFxVal("rotate_delay.size")||0}}}if(this.getFxVal("scale_toggle")){if(this.getFxVal("scale_x.size")||this.getFxVal("scale_x.sizes.to")){e.scaleX={value:[this.getFxVal("scale_x.sizes.from")||0,this.getFxVal("scale_x.size")||this.getFxVal("scale_x.sizes.to")],duration:this.getFxVal("scale_duration.size"),delay:this.getFxVal("scale_delay.size")||0}}if(this.getFxVal("scale_y.size")||this.getFxVal("scale_y.sizes.to")){e.scaleY={value:[this.getFxVal("scale_y.sizes.from")||0,this.getFxVal("scale_y.size")||this.getFxVal("scale_y.sizes.to")],duration:this.getFxVal("scale_duration.size"),delay:this.getFxVal("scale_delay.size")||0}}}if(this.getFxVal("translate_toggle")||this.getFxVal("rotate_toggle")||this.getFxVal("scale_toggle")){this.findElement(".elementor-widget-container").css("will-change","transform");this.anime=window.anime&&window.anime(e)}}});elementorFrontend.hooks.addAction("frontend/element_ready/widget",function(t){elementorFrontend.elementsHandler.addHandler(e,{$element:t})})})})(jQuery);</script>
    <script id="wpforms-elementor-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var wpformsElementorVars = {"recaptcha_type":"v2"};
    </script>
    <script id="tss-js-extra" type="nitropack/inlinescript" class="nitropack-inline-script">
        var tss = {"ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","nonce":"cae50d8d97","nonceId":"tss_nonce"};
    </script>
    <!-- <script id="wpforms-recaptcha-js-after" type="nitropack/inlinescript" class="nitropack-inline-script">
        var wpformsRecaptchaLoad = function(){jQuery(".g-recaptcha").each(function(index, el){var recaptchaID = grecaptcha.render(el,{callback:function(){wpformsRecaptchaCallback(el);}},true);jQuery(el).attr( "data-recaptcha-id", recaptchaID);});};var wpformsRecaptchaCallback = function(el){jQuery(el).parent().find(".wpforms-recaptcha-hidden").val("1").trigger("change").valid();};
    </script> -->
    <script id="ae22e1449bdfe0e1125c27abfb85afd7-1" type="nitropack/inlinescript" class="nitropack-inline-script">
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
                </script>
    <script id="d6659b1ee0e00ebdf8801220eb55b0ce-1" type="nitropack/inlinescript" class="nitropack-inline-script">
        /* <![CDATA[ */
    var wpforms_settings = {"val_required":"This field is required.","val_url":"Please enter a valid URL.","val_email":"Please enter a valid email address.","val_email_suggestion":"Did you mean {suggestion}?","val_email_suggestion_title":"Click to accept this suggestion.","val_number":"Please enter a valid number.","val_confirm":"Field values do not match.","val_fileextension":"File type is not allowed.","val_filesize":"File exceeds max size allowed. File was not uploaded.","val_time12h":"Please enter time in 12-hour AM\/PM format (eg 8:45 AM).","val_time24h":"Please enter time in 24-hour format (eg 22:45).","val_requiredpayment":"Payment is required.","val_creditcard":"Please enter a valid credit card number.","val_post_max_size":"The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.","val_checklimit":"You have exceeded the number of allowed selections: {#}.","val_limit_characters":"{count} of {limit} max characters.","val_limit_words":"{count} of {limit} max words.","val_recaptcha_fail_msg":"Google reCAPTCHA verification failed, please try again later.","post_max_size":"268435456","uuid_cookie":"1","locale":"en","wpforms_plugin_url":"https:\/\/resumein99.com\/wp-content\/plugins\/wpforms\/","gdpr":"","ajaxurl":"https:\/\/resumein99.com\/wp-admin\/admin-ajax.php","mailcheck_enabled":"1","mailcheck_domains":[],"mailcheck_toplevel_domains":["dev"],"currency_code":"USD","currency_thousands":",","currency_decimal":".","currency_symbol":"$","currency_symbol_pos":"left","val_phone":"Please enter a valid phone number."}
    /* ]]> */
    </script>
    <script>
        (function(n) {
            "use strict";
            if (!n.loadCSS) {
                n.loadCSS = function() {}
            }
            var o = loadCSS.relpreload = {};
            o.support = function() {
                var t;
                try {
                    t = n.document.createElement("link").relList.supports("preload")
                } catch (e) {
                    t = false
                }
                return function() {
                    return t
                }
            }();
            o.bindMediaToggle = function(e) {
                var t = e.media || "all";

                function a() {
                    e.media = t
                }
                if (e.addEventListener) {
                    e.addEventListener("load", a)
                } else if (e.attachEvent) {
                    e.attachEvent("onload", a)
                }
                setTimeout(function() {
                    e.rel = "stylesheet";
                    e.media = "only x"
                });
                setTimeout(a, 3e3)
            };
            o.poly = function() {
                if (o.support()) {
                    return
                }
                var e = n.document.getElementsByTagName("link");
                for (var t = 0; t < e.length; t++) {
                    var a = e[t];
                    if (a.rel === "preload" && a.getAttribute("as") === "style" && !a.getAttribute("data-loadcss")) {
                        a.setAttribute("data-loadcss", true);
                        o.bindMediaToggle(a)
                    }
                }
            };
            if (!o.support()) {
                o.poly();
                var e = n.setInterval(o.poly, 500);
                if (n.addEventListener) {
                    n.addEventListener("load", function() {
                        o.poly();
                        n.clearInterval(e)
                    })
                } else if (n.attachEvent) {
                    n.attachEvent("onload", function() {
                        o.poly();
                        n.clearInterval(e)
                    })
                }
            }
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS
            } else {
                n.loadCSS = loadCSS
            }
        })(typeof global !== "undefined" ? global : this);
    </script>
    <style id="nitro-fonts">
        @font-face {
            font-family: "FontAwesome";
            font-weight: normal;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/counter-number-showcase/assets/css/font-awesome/fonts/3e6eb37f30ca47e1f854d23f3eb21bc6.fontawesome-webfont.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: "FontAwesome";
            font-weight: normal;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/easy-accordion-free/public/assets/fonts/3e6eb37f30ca47e1f854d23f3eb21bc6.fontawesome-webfont.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: eicons;
            font-weight: 400;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/eicons/fonts/2b07610a286079a2e2c93464e7057e10.eicons.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff2") format("woff2");
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-regular-400.woff2") format("woff2");
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2") format("woff2");
        }

        @font-face {
            font-family: "Happy Icons";
            font-weight: normal;
            font-style: normal;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/happy-elementor-addons/assets/fonts/happy-icons.woff2") format("woff2");
        }

        @font-face {
            font-family: "FontAwesome";
            font-weight: normal;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/fonts/3e6eb37f30ca47e1f854d23f3eb21bc6.fontawesome-webfont.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx-muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCx6muKZlYPTr_Q.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: italic;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kBo8UDI-1M0wlSfdzyIEkpwTM29hr-8mTYCxCmuKZlYPQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 100;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 200;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 300;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 600;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 800;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLySOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLyTOxKsv4RnUPU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Archivo";
            font-style: normal;
            font-weight: 900;
            font-stretch: 100%;
            src: url("https://fonts.gstatic.com/s/archivo/v18/k3kPo8UDI-1M0wlSV9XAw6lQkqWY8Q82sLydOxKsv4Rn.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiAyp8kv8JHgFVrJJLmE0tDMPKhSkFEkm8.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiAyp8kv8JHgFVrJJLmE0tMMPKhSkFEkm8.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiAyp8kv8JHgFVrJJLmE0tCMPKhSkFE.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmv1pVFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmv1pVGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmv1pVF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm21lVFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm21lVGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm21lVF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrJJLucXtAOvWDSHFF.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrJJLufntAOvWDSHFF.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrJJLucHtAOvWDSA.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmg1hVFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmg1hVGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmg1hVF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmr19VFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmr19VGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmr19VF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmy15VFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmy15VGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLmy15VF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm111VFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm111VGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm111VF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm81xVFteOYktMqlap.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm81xVGdeOYktMqlap.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiDyp8kv8JHgFVrJJLm81xVF9eOYktMqg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrLPTucXtAOvWDSHFF.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrLPTufntAOvWDSHFF.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiGyp8kv8JHgFVrLPTucHtAOvWDSA.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLFj_Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLFj_Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLFj_Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLGT9Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDD4Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDD4Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDD4Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLBT5Z11lFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLBT5Z1JlFd2JQEl8qw.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLBT5Z1xlFd2JQEk.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz0dL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzQdL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzwdL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzMdL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz8dL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEz4dL-vwnYh2eg.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzAdL-vwnYg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc3CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc-CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc2CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc5CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc1CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc0CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc6CsTYl4BO.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xFIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xMIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xEIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xLIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xHIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xGIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xIIzIXKMny.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc3CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc-CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc2CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc5CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc1CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc0CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc6CsTYl4BO.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic3CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic-CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic2CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic5CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic1CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic0CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic6CsTYl4BO.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc3CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc-CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc2CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc5CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc1CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc0CsTYl4BOQ3o.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: italic;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc6CsTYl4BO.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxFIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxMIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxEIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxLIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxHIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxGIzIXKMnyrYk.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxIIzIXKMny.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCRc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfABc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCBc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfCxc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfChc4AMP6lbBP.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBBc4AMP6lQ.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2") format("woff2");
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff2") format("woff2");
        }

        @font-face {
            font-family: "responsive-lightbox";
            font-weight: normal;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/responsive-lightbox/font/90a90dd3cf48faa18845f551ae21d8bb.responsive-lightbox.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 100;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 200;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 600;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 700;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 800;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+1F00-1FFF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0370-03FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2") format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: "Inter";
            font-style: normal;
            font-weight: 900;
            src: url("https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2") format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-regular-400.woff2") format("woff2");
        }

        @font-face {
            font-family: swiper-icons;
            src: url("data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "FontAwesome";
            font-weight: normal;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-content/plugins/testimonial-slider-and-showcase/assets/vendor/font-awesome/fonts/3e6eb37f30ca47e1f854d23f3eb21bc6.fontawesome-webfont.woff2") format("woff2");
            font-display: swap;
        }

        @font-face {
            font-family: dashicons;
            font-weight: 400;
            font-style: normal;
            src: url("https://cdn-gaohk.nitrocdn.com/RPtTvpArotTppzWYVXOWCnEkebdsLoWf/assets/static/source/rev-a287064/wp-includes/fonts/cc26977e9557edbbc60f1255fb1de6ee.dashicons.ttf") format("truetype");
            font-display: swap;
        }
    </style>
    <script nitro-exclude>
        (function() {
            const e = document.createElement("link");
            if (!(e.relList && e.relList.supports && e.relList.supports("prefetch"))) {
                return
            }
            let r = document.cookie.includes("9d63262f59cd9b3378f01392c");
            let c = {
                initNP_PPL: function() {
                    if (window.NP_PPL !== undefined) return;
                    window.NP_PPL = {
                        prefetches: [],
                        lcpEvents: [],
                        other: []
                    }
                },
                logPrefetch: function(e, t) {
                    let n = JSON.parse(window.sessionStorage.getItem("nitro_prefetched_urls"));
                    if (n === null) n = {};
                    if (n[e] === undefined) {
                        n[e] = t;
                        window.sessionStorage.setItem("nitro_prefetched_urls", JSON.stringify(n))
                    }
                    if (!r) return;
                    window.NP_PPL.prefetches.push({
                        url: e,
                        initiator: t,
                        timestamp: performance.now()
                    })
                },
                logLcpEvent: function(e, t = null) {
                    if (!r) return;
                    window.NP_PPL.lcpEvents.push({
                        message: e,
                        data: t,
                        timestamp: performance.now()
                    })
                },
                logOther: function(e, t = null) {
                    if (!r) return;
                    window.NP_PPL.other.push({
                        message: e,
                        data: t,
                        timestamp: performance.now()
                    })
                }
            };
            if (r) {
                c.initNP_PPL()
            }
            let o = 0;
            const t = 300;
            let n = ".resumein99.com";
            let l = new RegExp(n + "$");

            function a() {
                return performance.now() - o > t
            }

            function u() {
                let n;
                let r = performance.now();
                const e = {
                    capture: true,
                    passive: true
                };
                document.addEventListener("touchstart", t, e);
                document.addEventListener("mouseover", o, e);

                function t(e) {
                    r = performance.now();
                    const t = e.target.closest("a");
                    if (!t || !s(t)) {
                        return
                    }
                    g(t.href, "TOUCH")
                }

                function o(e) {
                    c.logOther("mouseoverListener() called", e);
                    if (performance.now() - r < 1111) {
                        return
                    }
                    const t = e.target.closest("a");
                    if (!t || !s(t)) {
                        return
                    }
                    t.addEventListener("mouseout", l, {
                        passive: true
                    });
                    n = setTimeout(function() {
                        c.logOther("mouseoverTimer CALLBACK called", e);
                        g(t.href, "HOVER");
                        n = undefined
                    }, 85)
                }

                function l(e) {
                    if (e.relatedTarget && e.target.closest("a") == e.relatedTarget.closest("a")) {
                        return
                    }
                    if (n) {
                        clearTimeout(n);
                        n = undefined
                    }
                }
            }

            function f() {
                if (!PerformanceObserver.supportedEntryTypes.includes("largest-contentful-paint")) {
                    c.logLcpEvent("PerformanceObserver does not support LCP events in this browser.");
                    return
                }
                let e = new PerformanceObserver(e => {
                    c.logLcpEvent("LCP_DETECTED", e.getEntries().at(-1).element);
                    _ = e.getEntries().at(-1).element
                });
                let t = function(e) {
                    b = window.requestIdleCallback(E);
                    window.removeEventListener("load", t)
                };
                k.forEach(e => {
                    window.addEventListener(e, w, {
                        once: true
                    })
                });
                e.observe({
                    type: "largest-contentful-paint",
                    buffered: true
                });
                window.addEventListener("load", t)
            }

            function s(t) {
                if (!t) {
                    c.logOther("Link Not Prefetchable: empty link element.", t);
                    return false
                }
                if (!t.href) {
                    c.logOther("Link Not Prefetchable: empty href attribute.", t);
                    return false
                }
                let e = t.href;
                let n = null;
                try {
                    n = new URL(e)
                } catch (e) {
                    c.logOther("Link Not Prefetchable: " + e, t);
                    return false
                }
                let r = "." + n.hostname.replace("www.", "");
                if (!["http:", "https:"].includes(t.protocol)) {
                    c.logOther("Link Not Prefetchable: missing protocol in the URL.", t);
                    return false
                }
                if (t.protocol == "http:" && location.protocol == "https:") {
                    c.logOther("Link Not Prefetchable: URL is HTTP but the current page is HTTPS.", t);
                    return false
                }
                if (t.getAttribute("href").charAt(0) == "#" || t.hash && t.pathname + t.search == location.pathname + location.search) {
                    c.logOther("Link Not Prefetchable: URL is the current location but with a hash.", t);
                    return false
                }
                if (l.exec(r) === null) {
                    c.logOther("Link Not Prefetchable: Different domain.", t);
                    return false
                }
                for (i = 0; i < y.length; i++) {
                    if (e.match(y[i]) !== null) {
                        c.logOther("Link Not Prefetchable: Excluded URL " + e + ".", {
                            link: t,
                            regex: y[i]
                        });
                        return false
                    }
                }
                return true
            }

            function h() {
                let e = navigator.connection;
                if (!e) {
                    return false
                }
                if (e.saveData) {
                    c.logOther("Data Saving Mode detected.");
                    return true
                }
                return false
            }

            function d() {
                if (R !== null) {
                    return R
                }
                R = h();
                return R
            }
            if (!window.requestIdleCallback) {
                window.requestIdleCallback = function(e, t) {
                    var t = t || {};
                    var n = 1;
                    var r = t.timeout || n;
                    var o = performance.now();
                    return setTimeout(function() {
                        e({
                            get didTimeout() {
                                return t.timeout ? false : performance.now() - o - n > r
                            },
                            timeRemaining: function() {
                                return Math.max(0, n + (performance.now() - o))
                            }
                        })
                    }, n)
                }
            }
            if (!window.cancelIdleCallback) {
                window.cancelIdleCallback = function(e) {
                    clearTimeout(e)
                }
            }
            let p = function(e, t) {
                c.logLcpEvent("MUTATION_DETECTED", e);
                clearTimeout(D);
                D = setTimeout(P, 500, e)
            };
            let g = function(e, t = "", n = false) {
                if (O.indexOf(e) > -1) {
                    c.logOther("Prefetch skipped: URL is already prefetched.", e);
                    return
                }
                if (O.length > 15) {
                    c.logOther("Prefetch skipped: Maximum prefetches threshold reached.");
                    return
                }
                if (!n && !a()) {
                    c.logOther("Prefetch skipped: on cooldown", e);
                    return
                }
                if (d()) {
                    c.logOther("Prefetch skipped: limited connection", e);
                    return
                }
                const r = document.createElement("link");
                r.rel = "prefetch";
                r.type = "text/html";
                r.href = e;
                document.head.appendChild(r);
                O.push(e);
                o = performance.now();
                c.logPrefetch(e, t);
                return true
            };

            function m(t) {
                let e = document.querySelector("body");
                while (t != e) {
                    if (L(t)) {
                        t = t.parentElement;
                        c.logOther("Skipping LCP container level: Inside a <nav> element.", t);
                        continue
                    }
                    let e = Array.from(t.querySelectorAll("a"));
                    c.logOther("filtering links...", e);
                    e = e.filter(e => {
                        if (L(e)) {
                            c.logOther("Skipping link: Inside a <nav> element.", t);
                            return false
                        }
                        return s(e)
                    });
                    if (e.length > 0) return [e, t];
                    t = t.parentElement
                }
                return [
                    [], null
                ]
            }

            function L(e) {
                return e.closest("nav") !== null || e.nodeName == "NAV"
            }

            function w(e) {
                N = true;
                if (I && !S) {
                    v()
                }
            }

            function E(e) {
                I = true;
                if (N && !S) {
                    if (v()) {
                        window.cancelIdleCallback(b)
                    } else {
                        C++;
                        if (C > 2) {
                            window.cancelIdleCallback(b);
                            c.logLcpEvent("IDLE_CALLBACK_CANCELLED")
                        }
                    }
                }
            }

            function v() {
                if (_ == null) {
                    c.logLcpEvent("doLcpPrefetching_CALLBACK_CALLED_WITHOUT_LCP_ELEMENT");
                    return false
                }
                let e = [];
                [e, T] = m(_);
                if (e.length == 0) {
                    c.logLcpEvent("NO_LINKS_FOUND");
                    return false
                }
                if (e.length > 0) {
                    g(e[0].href, "LCP", !S);
                    S = true
                }
                A.observe(T, {
                    subtree: true,
                    childList: true,
                    attributes: true
                });
                c.logLcpEvent("MUTATION_OBSERVER_REGISTERED");
                window.cancelIdleCallback(b);
                c.logLcpEvent("IDLE_CALLBACK_CANCELLED")
            }

            function P(e) {
                c.logLcpEvent("MUTATION_RESCAN_TRIGGERED", e);
                let t = m(T)[0];
                if (t.length > 0) {
                    g(t[0].href, "LCP_MUTATION")
                }
            }
            let O = [];
            let _ = null;
            let T = null;
            let b = 0;
            let C = 0;
            let k = ["mousemove", "click", "keydown", "touchmove", "touchstart"];
            let N = false;
            let I = false;
            const A = new MutationObserver(p);
            let D = 0;
            let S = false;
            let R = null;
            let y = JSON.parse(atob("WyIuKj9cXD9hZGRcXC10b1xcLWNhcnRcXD0uKj8iLCIuKj8mYWRkXFwtdG9cXC1jYXJ0XFw9Lio/IiwiLio/ZG93bmxvYWQuKj8iLCIuKj9cXC5leGUiLCIuKj9cXC56aXAiLCIuKj9cXC5yYXIiLCIuKj9cXC5kZWIiLCIuKj9cXC5ycG0iLCIuKj9cXC5wa2ciLCIuKj9cXC5kbWciLCIuKj9cXC5wZGYiLCIuKj9cXC5tc2kiLCIuKj9cXC5tcDMiLCIuKj9cXC5kb2MiLCIuKj9cXC5kb2N4IiwiLio/XFwucHB0IiwiLio/XFwueGxzIiwiLio/XFwueGxzeCIsIi4qP1xcLm9kdCIsIi4qP1xcLnR4dCJd"));
            if (Object.prototype.toString.call(y) === "[object Object]") {
                c.logOther("EXCLUDES_AS_OBJECT", y);
                let e = [];
                for (const i in y) {
                    e.push(y[i])
                }
                y = e
            }
            y = y.map(e => new RegExp(e));
            if (navigator.connection) {
                navigator.connection.onchange = function(e, t) {
                    R = null;
                    c.logOther("Connection changed", {
                        effectiveType: navigator.connection.effectiveType,
                        rtt: navigator.connection.rtt,
                        downlink: navigator.connection.downlink,
                        saveData: navigator.connection.saveData
                    })
                }
            }
            f();
            u()
        })();
    </script>
    <script nitro-exclude>
        (function() {
            ! function(e, t) {
                "object" == typeof exports && "undefined" != typeof module ? t(exports) : "function" == typeof define && define.amd ? define(["exports"], t) : t((e = "undefined" != typeof globalThis ? globalThis : e || self).webVitals = {})
            }(this, (function(e) {
                "use strict";
                var t, n, i, r, a = function(e, t) {
                        return {
                            name: e,
                            value: void 0 === t ? -1 : t,
                            delta: 0,
                            entries: [],
                            id: "v2-".concat(Date.now(), "-").concat(Math.floor(8999999999999 * Math.random()) + 1e12)
                        }
                    },
                    o = function(e, t) {
                        try {
                            if (PerformanceObserver.supportedEntryTypes.includes(e)) {
                                if ("first-input" === e && !("PerformanceEventTiming" in self)) return;
                                var n = new PerformanceObserver((function(e) {
                                    return e.getEntries().map(t)
                                }));
                                return n.observe({
                                    type: e,
                                    buffered: !0
                                }), n
                            }
                        } catch (e) {}
                    },
                    u = function(e, t) {
                        var n = function n(i) {
                            "pagehide" !== i.type && "hidden" !== document.visibilityState || (e(i), t && (removeEventListener("visibilitychange", n, !0), removeEventListener("pagehide", n, !0)))
                        };
                        addEventListener("visibilitychange", n, !0), addEventListener("pagehide", n, !0)
                    },
                    c = function(e) {
                        addEventListener("pageshow", (function(t) {
                            t.persisted && e(t)
                        }), !0)
                    },
                    f = function(e, t, n) {
                        var i;
                        return function(r) {
                            t.value >= 0 && (r || n) && (t.delta = t.value - (i || 0), (t.delta || void 0 === i) && (i = t.value, e(t)))
                        }
                    },
                    s = -1,
                    m = function() {
                        return "hidden" === document.visibilityState ? 0 : 1 / 0
                    },
                    d = function() {
                        u((function(e) {
                            var t = e.timeStamp;
                            s = t
                        }), !0)
                    },
                    v = function() {
                        return s < 0 && (s = m(), d(), c((function() {
                            setTimeout((function() {
                                s = m(), d()
                            }), 0)
                        }))), {
                            get firstHiddenTime() {
                                return s
                            }
                        }
                    },
                    p = function(e, t) {
                        var n, i = v(),
                            r = a("FCP"),
                            u = function(e) {
                                "first-contentful-paint" === e.name && (m && m.disconnect(), e.startTime < i.firstHiddenTime && (r.value = e.startTime, r.entries.push(e), n(!0)))
                            },
                            s = window.performance && performance.getEntriesByName && performance.getEntriesByName("first-contentful-paint")[0],
                            m = s ? null : o("paint", u);
                        (s || m) && (n = f(e, r, t), s && u(s), c((function(i) {
                            r = a("FCP"), n = f(e, r, t), requestAnimationFrame((function() {
                                requestAnimationFrame((function() {
                                    r.value = performance.now() - i.timeStamp, n(!0)
                                }))
                            }))
                        })))
                    },
                    l = !1,
                    g = -1,
                    y = {
                        passive: !0,
                        capture: !0
                    },
                    T = new Date,
                    h = function(e, r) {
                        t || (t = r, n = e, i = new Date, S(removeEventListener), E())
                    },
                    E = function() {
                        if (n >= 0 && n < i - T) {
                            var e = {
                                entryType: "first-input",
                                name: t.type,
                                target: t.target,
                                cancelable: t.cancelable,
                                startTime: t.timeStamp,
                                processingStart: t.timeStamp + n
                            };
                            r.forEach((function(t) {
                                t(e)
                            })), r = []
                        }
                    },
                    L = function(e) {
                        if (e.cancelable) {
                            var t = (e.timeStamp > 1e12 ? new Date : performance.now()) - e.timeStamp;
                            "pointerdown" == e.type ? function(e, t) {
                                var n = function() {
                                        h(e, t), r()
                                    },
                                    i = function() {
                                        r()
                                    },
                                    r = function() {
                                        removeEventListener("pointerup", n, y), removeEventListener("pointercancel", i, y)
                                    };
                                addEventListener("pointerup", n, y), addEventListener("pointercancel", i, y)
                            }(t, e) : h(t, e)
                        }
                    },
                    S = function(e) {
                        ["mousedown", "keydown", "touchstart", "pointerdown"].forEach((function(t) {
                            return e(t, L, y)
                        }))
                    },
                    w = {};
                e.getCLS = function(e, t) {
                    l || (p((function(e) {
                        g = e.value
                    })), l = !0);
                    var n, i = function(t) {
                            g > -1 && e(t)
                        },
                        r = a("CLS", 0),
                        s = 0,
                        m = [],
                        d = function(e) {
                            if (!e.hadRecentInput) {
                                var t = m[0],
                                    i = m[m.length - 1];
                                s && e.startTime - i.startTime < 1e3 && e.startTime - t.startTime < 5e3 ? (s += e.value, m.push(e)) : (s = e.value, m = [e]), s > r.value && (r.value = s, r.entries = m, n())
                            }
                        },
                        v = o("layout-shift", d);
                    v && (n = f(i, r, t), u((function() {
                        v.takeRecords().map(d), n(!0)
                    })), c((function() {
                        s = 0, g = -1, r = a("CLS", 0), n = f(i, r, t)
                    })))
                }, e.getFCP = p, e.getFID = function(e, i) {
                    var s, m = v(),
                        d = a("FID"),
                        p = function(e) {
                            e.startTime < m.firstHiddenTime && (d.value = e.processingStart - e.startTime, d.entries.push(e), s(!0))
                        },
                        l = o("first-input", p);
                    s = f(e, d, i), l && u((function() {
                        l.takeRecords().map(p), l.disconnect()
                    }), !0), l && c((function() {
                        var o;
                        d = a("FID"), s = f(e, d, i), r = [], n = -1, t = null, S(addEventListener), o = p, r.push(o), E()
                    }))
                }, e.getLCP = function(e, t) {
                    var n, i = v(),
                        r = a("LCP"),
                        s = function(e) {
                            var t = e.startTime;
                            t < i.firstHiddenTime && (r.value = t, r.entries.push(e), n())
                        },
                        m = o("largest-contentful-paint", s);
                    if (m) {
                        n = f(e, r, t);
                        var d = function() {
                            w[r.id] || (m.takeRecords().map(s), m.disconnect(), w[r.id] = !0, n(!0))
                        };
                        ["keydown", "click"].forEach((function(e) {
                            addEventListener(e, d, {
                                once: !0,
                                capture: !0
                            })
                        })), u(d, !0), c((function(i) {
                            r = a("LCP"), n = f(e, r, t), requestAnimationFrame((function() {
                                requestAnimationFrame((function() {
                                    r.value = performance.now() - i.timeStamp, w[r.id] = !0, n(!0)
                                }))
                            }))
                        }))
                    }
                }, e.getTTFB = function(e) {
                    var t, n = a("TTFB");
                    t = function() {
                        try {
                            var t = performance.getEntriesByType("navigation")[0] || function() {
                                var e = performance.timing,
                                    t = {
                                        entryType: "navigation",
                                        startTime: 0
                                    };
                                for (var n in e) "navigationStart" !== n && "toJSON" !== n && (t[n] = Math.max(e[n] - e.navigationStart, 0));
                                return t
                            }();
                            if (n.value = n.delta = t.responseStart, n.value < 0 || n.value > performance.now()) return;
                            n.entries = [t], e(n)
                        } catch (e) {}
                    }, "complete" === document.readyState ? setTimeout(t, 0) : addEventListener("load", (function() {
                        return setTimeout(t, 0)
                    }))
                }, Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }));
            var nitroTelemetry = function() {
                let e = !!window.IS_NITROPACK;
                let c = performance.getEntriesByType("navigation")[0];
                let d = c.responseStart - c.requestStart <= 5;
                let t = true;
                let o = false;
                let n = null;
                let l = null;
                let w = null;
                let r = h();
                let p = "https://to.getnitropack.com/";
                let g = "RPtTvpArotTppzWYVXOWCnEkebdsLoWf";
                let y = typeof NPRL != "undefined";
                let S = y ? "loadNitro" : "load";
                let a;
                let i;
                let f;
                let v = ["missReason", "pageType"];

                function h() {
                    return "NPTelemetry:" + btoa(Date.now()) + "_" + b() + (e ? "_o" : "_u") + (d ? "_pre" : "_dow")
                }

                function m() {
                    return document.visibilityState === "visible"
                }

                function N() {
                    t = true;
                    r = h();
                    a = null;
                    i = {
                        crux: null
                    };
                    I()
                }

                function I() {
                    f = {
                        sessionEntry: null,
                        unknown: 0,
                        afterStyles: 0,
                        afterPageLoad: 0,
                        afterScroll: 0,
                        total: 0
                    }
                }

                function L() {
                    let n = performance.getEntriesByType("navigation");
                    let l = {};
                    for (let t in n) {
                        let e = n[t];
                        l.ttfb = e.responseStart - e.requestStart
                    }
                    return l
                }

                function b() {
                    if (navigator.connection) {
                        return navigator.connection.effectiveType
                    } else {
                        return "u"
                    }
                }

                function P() {
                    let e = r + ":pageview";
                    u(e, {
                        pv: 1
                    })
                }

                function D() {
                    if (typeof NPTelemetryMetadata === "object") {
                        for (let e in NPTelemetryMetadata) {
                            if (v.indexOf(e) === -1) {
                                delete NPTelemetryMetadata[e]
                            }
                        }
                        let e = r + ":metadata";
                        u(e, {
                            metaData: NPTelemetryMetadata
                        })
                    }
                }

                function E() {
                    if (window.localStorage) {
                        let e = "NPTelemetryMeta:lastpv";
                        let t = parseInt(localStorage.getItem(e));
                        let n = Date.now();
                        localStorage.setItem(e, n);
                        return isNaN(t) || t === 0 ? -1 : (n - t) / 1e3
                    }
                    return null
                }

                function u(e, t) {
                    t.url = window.location.href.replace(window.location.hash, "");
                    if (window.localStorage) {
                        localStorage.setItem(e, JSON.stringify(t))
                    } else {
                        O([t])
                    }
                }

                function s(e) {
                    if (!window.localStorage) return;
                    let n = null;
                    let l = {};
                    let t = 0;
                    let r;
                    let a;
                    let i;
                    do {
                        n = localStorage.key(t);
                        if (n && n.indexOf("NPTelemetry:") === 0) {
                            i = n.split(":")[1];
                            r = JSON.parse(localStorage.getItem(n));
                            if (!l[i]) l[i] = {};
                            let t = l[i];
                            for (let e in r) {
                                a = r[e];
                                if (a !== null) {
                                    if (e == "url" || e === "metaData" || e === "prefetchInitiator") {
                                        t[e] = a
                                    } else if (T(a)) {
                                        if (!t[e]) t[e] = 0;
                                        t[e] += a
                                    } else if (k(a)) {
                                        if (!t[e]) t[e] = {};
                                        if (!t[e][a]) t[e][a] = 0;
                                        t[e][a]++
                                    }
                                }
                            }
                            localStorage.removeItem(n)
                        } else {
                            t++
                        }
                    } while (n !== null);
                    if (Object.keys(l).length) {
                        O(l)
                    }
                    o = false
                }

                function T(e) {
                    return !isNaN(parseFloat(e)) && isFinite(e)
                }

                function k(e) {
                    return typeof e === "string" || e instanceof String
                }

                function O(e) {
                    let t = new FormData;
                    t.append("key", g);
                    if (Object.keys(e).length) {
                        t.append("props", JSON.stringify(e));
                        navigator.sendBeacon && navigator.sendBeacon(p, t) || fetch(p, {
                            body: t,
                            method: "POST",
                            keepalive: true
                        })
                    }
                }

                function M(e) {
                    if (e === s) {
                        if (o) {
                            return
                        } else {
                            o = true
                        }
                    }
                    if (window.requestIdleCallback) {
                        requestIdleCallback(e, {
                            timeout: 1e3
                        })
                    } else {
                        setTimeout(e, 1e3)
                    }
                }

                function _() {
                    let e = r + ":cwv";
                    let t = {};
                    if (i.crux) {
                        t["lcp:crux"] = Math.round(i.crux)
                    }
                    if (f.total !== null) {
                        let e = 1e3;
                        t["cls:total"] = Math.round(f.total * e);
                        if (f.afterStyles) {
                            t["cls:afterStylesDelta"] = Math.round(f.afterStyles * e)
                        }
                        if (f.afterPageLoad) {
                            t["cls:afterPageLoadDelta"] = Math.round(f.afterPageLoad * e)
                        }
                        if (f.afterScroll) {
                            t["cls:afterScrollDelta"] = Math.round(f.afterScroll * e)
                        }
                        if (f.unknown) {
                            t["cls:unknownDelta"] = Math.round(f.unknown * e)
                        }
                    } else {
                        t["cls:total"] = 0
                    }
                    if (a) {
                        t["fid"] = Math.round(a)
                    }
                    if (Object.keys(t).length) {
                        u(e, t)
                    }
                }

                function x() {
                    n = Date.now();
                    window.removeEventListener("NitroStylesLoaded", x, true)
                }

                function C() {
                    l = Date.now();
                    window.removeEventListener(S, C, true)
                }

                function j() {
                    w = Date.now()
                }

                function q(e) {
                    return n && Date.now() - n < e
                }

                function B(e) {
                    return l && Date.now() - l < e
                }

                function F(e) {
                    return w && Date.now() - w < e
                }

                function J() {
                    let t = JSON.parse(window.sessionStorage.getItem("nitro_prefetched_urls"));
                    if (t !== null) {
                        window.sessionStorage.removeItem("nitro_prefetched_urls");
                        let e = window.location.href;
                        if (t[e]) {
                            prefetchInitiator = t[e]
                        } else if (d) {
                            prefetchInitiator = "UNKNOWN"
                        } else {
                            prefetchInitiator = "NONE"
                        }
                        u(r + ":pagePrefetches", {
                            prefetchCount: Object.entries(t).length,
                            prefetchInitiator: prefetchInitiator
                        })
                    }
                }
                N();
                window.addEventListener(S, C, true);
                document.addEventListener("scroll", j, {
                    capture: true,
                    passive: true
                });
                if (y) {
                    window.addEventListener("NitroStylesLoaded", x, true)
                }
                window.addEventListener("load", function() {
                    let e = L();
                    let t = E();
                    D();
                    J();
                    u(r + ":net", {
                        ttfb: Math.round(e.ttfb),
                        lastNavDiff: t
                    })
                }, true);
                window.addEventListener("pageshow", function(e) {
                    if (m() && (t || e.persisted)) {
                        P();
                        M(s);
                        t = false
                    }
                }, true);
                window.addEventListener("pagehide", function(e) {
                    _();
                    N();
                    s()
                }, true);
                document.addEventListener("visibilitychange", function(e) {
                    if (m()) {
                        if (t) {
                            P();
                            M(s);
                            t = false
                        }
                    } else {}
                }, true);
                webVitals.getLCP(function(e) {
                    i.crux = e.value
                }, true);
                webVitals.getCLS(function(e) {
                    if (e.entries[0] !== f.sessionEntry) {
                        I();
                        f.sessionEntry = e.entries[0]
                    }
                    f.total = e.value;
                    let t = 250;
                    let n = F(t) + B(t) + q(t);
                    if (n == 1) {
                        if (F(t)) {
                            f.afterScroll += e.delta
                        }
                        if (B(t)) {
                            f.afterPageLoad += e.delta
                        }
                        if (q(t)) {
                            f.afterStyles += e.delta
                        }
                    } else {
                        f.unknown += e.delta
                    }
                }, true);
                webVitals.getFID(function(e) {
                    a = e.value
                });
                return {}
            }();;
        })();
    </script>
</head>