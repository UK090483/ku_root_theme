!(function(e) {
  var t = {};
  function n(o) {
    if (t[o]) return t[o].exports;
    var r = (t[o] = { i: o, l: !1, exports: {} });
    return e[o].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
  }
  (n.m = e),
    (n.c = t),
    (n.d = function(e, t, o) {
      n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: o });
    }),
    (n.r = function(e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (n.t = function(e, t) {
      if ((1 & t && (e = n(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var o = Object.create(null);
      if (
        (n.r(o),
        Object.defineProperty(o, "default", { enumerable: !0, value: e }),
        2 & t && "string" != typeof e)
      )
        for (var r in e)
          n.d(
            o,
            r,
            function(t) {
              return e[t];
            }.bind(null, r)
          );
      return o;
    }),
    (n.n = function(e) {
      var t =
        e && e.__esModule
          ? function() {
              return e.default;
            }
          : function() {
              return e;
            };
      return n.d(t, "a", t), t;
    }),
    (n.o = function(e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (n.p = "/wordpress_root/wp-content/themes/jmh/public/js/"),
    n((n.s = 0));
})([
  function(e, t, n) {
    "use strict";
    n.r(t);
    n(1), n(2), n(3);
  },
  function(e, t, n) {},
  function(e, t) {
    document.querySelector(".nav--mobile");
    var n = document.querySelector("body"),
      o = document.querySelector(".main-navigation");
    if (o) {
      var r = function() {
          o.classList.contains("nav--mobile-open") ? c() : i();
        },
        i = function() {
          n.classList.remove("body-scrolled"),
            a.classList.add("nav--mobile-btn-open"),
            o.classList.add("nav--mobile-open"),
            (n.style.overflow = "hidden"),
            u(!0);
        },
        c = function() {
          (n.style.overflow = "scroll"),
            u(!1),
            s(),
            a.classList.remove("nav--mobile-btn-open"),
            o.classList.remove("nav--mobile-open");
        },
        l = function() {
          (window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth) > 840 &&
            o.classList.contains("nav--mobile-open") &&
            c();
        },
        s = function() {
          var e = window.scrollY,
            t = n.classList;
          e > 50 && !n.classList.contains("nav--scrolled")
            ? t.add("body-scrolled")
            : t.remove("body-scrolled");
        },
        u = function(e) {
          !0 === e
            ? document.body.addEventListener("touchmove", d, !1)
            : document.body.removeEventListener("touchmove", d, !1);
        },
        a = o.querySelector(".nav--mobile-btn");
      o.querySelectorAll("a").forEach(function(e) {
        e.addEventListener("click", function() {
          c();
        });
      }),
        a &&
          a.addEventListener("click", function(e) {
            r();
          }),
        window.addEventListener("scroll", function() {
          s();
        }),
        window.addEventListener("resize", function() {
          l();
        });
      var d = function(e) {
        e.preventDefault();
      };
    }
  },
  function(e, t) {
    function n(e, t) {
      for (var n = 0; n < t.length; n++) {
        var o = t[n];
        (o.enumerable = o.enumerable || !1),
          (o.configurable = !0),
          "value" in o && (o.writable = !0),
          Object.defineProperty(e, o.key, o);
      }
    }
    var o,
      r,
      i,
      c,
      l,
      s = document.querySelector(".jmh-scrollbar-wrap"),
      u = s.querySelector(".jmh-scrollbar"),
      a = u.querySelector(".jmh-scrollbar--dot"),
      d = document.querySelector("body"),
      f = 0;
    function m() {
      (i =
        d.getBoundingClientRect().height -
        Math.max(
          document.documentElement.clientHeight,
          window.innerHeight || 0
        )),
        (c = i / r);
    }
    function v() {
      m(),
        (o = i > 0) &&
          (s.classList.add("jmh-scrollbar-visible"),
          (r = u.getBoundingClientRect().height),
          (c = i / r));
    }
    function b(e) {
      (f = e.clientY),
        (scrollYAtCatc = scrollY),
        e.preventDefault(),
        (l = !0),
        d.addEventListener("mousemove", y),
        s.classList.add("scrolldot-catched");
    }
    function h() {
      (l = !1),
        d.removeEventListener("mousemove", y),
        s.classList.remove("scrolldot-catched");
    }
    function y(e) {
      var t, n;
      (t = e.clientY - f), (n = scrollYAtCatc + t * c), window.scrollTo(0, n);
    }
    v(),
      o &&
        (a.addEventListener("mousedown", b, !1),
        d.addEventListener("mouseup", h),
        document.addEventListener("mouseout", function(e) {
          var t = (e = e || window.event).relatedTarget || e.toElement;
          (t && "HTML" != t.nodeName) || h();
        }),
        u.addEventListener("mousedown", function(e) {
          l || window.scrollTo({ top: e.offsetY * c, behavior: "smooth" });
        }),
        (d.onresize = function() {
          v();
        }),
        (d.onscroll = function() {
          var e;
          m(),
            (e = (r / 100) * (scrollY / (i / 100))),
            (a.style.top = e + "px");
        })),
      new ((function() {
        function e() {
          !(function(e, t) {
            if (!(e instanceof t))
              throw new TypeError("Cannot call a class as a function");
          })(this, e),
            (this.scrollbarWrap = document.querySelector(
              ".jmh-scrollbar-wrap"
            )),
            (this.scrollbar = s.querySelector(".jmh-scrollbar")),
            (this.dot = u.querySelector(".jmh-scrollbar--dot")),
            (this.body = document.body),
            (this.mousepostion = 0),
            (this.scrollYAtCatch = 0),
            (this.visible = !1),
            this.scrollbarHeight,
            this.allhight,
            this.multiplicator,
            this.catched,
            (this.bodyHeight = this.body.getBoundingClientRect().height);
        }
        var t, o, r;
        return (
          (t = e),
          (o = [
            { key: "resetDynamicValues", value: function() {} },
            { key: "setWindowScroll", value: function() {} },
            { key: "setDot", value: function() {} }
          ]) && n(t.prototype, o),
          r && n(t, r),
          e
        );
      })())();
  }
]);
//# sourceMappingURL=main.bundle.js.map
