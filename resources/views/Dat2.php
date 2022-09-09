<!doctype html>
<html lang="en">

<head>
    <title data-rh="true">
        How to implement datatables in laravel | by Avinash Nethala | justlaravel | Medium
    </title>
    <meta data-rh="true" charset="utf-8" />
    <meta data-rh="true" name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1" />
    <meta data-rh="true" name="theme-color" content="#000000" />
    <meta data-rh="true" name="twitter:app:name:iphone" content="Medium" />
    <meta data-rh="true" name="twitter:app:id:iphone" content="828256236" />
    <meta data-rh="true" property="al:ios:app_name" content="Medium" />
    <meta data-rh="true" property="al:ios:app_store_id" content="828256236" />
    <meta data-rh="true" property="al:android:package" content="com.medium.reader" />
    <meta data-rh="true" property="fb:app_id" content="542599432471018" />
    <meta data-rh="true" property="og:site_name" content="Medium" />
    <meta data-rh="true" property="og:type" content="article" />
    <meta data-rh="true" property="article:published_time" content="2019-10-02T09:23:55.019Z" />
    <meta data-rh="true" name="title" content="How to implement datatables in laravel | by Avinash Nethala | justlaravel | Medium" />
    <meta data-rh="true" property="og:title" content="How to implement datatables in laravel" />
    <meta data-rh="true" property="twitter:title" content="How to implement datatables in laravel" />
    <meta data-rh="true" name="twitter:site" content="@justLaravel" />
    <meta data-rh="true" name="twitter:app:url:iphone" content="medium://p/de200c8d4467" />
    <meta data-rh="true" property="al:android:url" content="medium://p/de200c8d4467" />
    <meta data-rh="true" property="al:ios:url" content="medium://p/de200c8d4467" />
    <meta data-rh="true" property="al:android:app_name" content="Medium" />
    <meta data-rh="true" name="description" content="Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for table extender, it provides the functionalities like search…" />
    <meta data-rh="true" property="og:description" content="Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for…" />
    <meta data-rh="true" property="twitter:description" content="Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for…" />
    <meta data-rh="true" property="og:url" content="https://medium.com/justlaravel/how-to-implement-datatables-in-laravel-de200c8d4467" />
    <meta data-rh="true" property="al:web:url" content="https://medium.com/justlaravel/how-to-implement-datatables-in-laravel-de200c8d4467" />
    <meta data-rh="true" property="og:image" content="https://miro.medium.com/max/1024/0*jHRjgulo5b4m2WJK.png" />
    <meta data-rh="true" name="twitter:image:src" content="https://miro.medium.com/max/1024/0*jHRjgulo5b4m2WJK.png" />
    <meta data-rh="true" name="twitter:card" content="summary_large_image" />
    <meta data-rh="true" property="article:author" content="https://medium.com/@avinashn" />
    <meta data-rh="true" name="twitter:creator" content="@justLaravel" />
    <meta data-rh="true" name="author" content="Avinash Nethala" />
    <meta data-rh="true" name="robots" content="index,follow,max-image-preview:large" />
    <meta data-rh="true" name="referrer" content="unsafe-url" />
    <meta data-rh="true" name="twitter:label1" content="Reading time" />
    <meta data-rh="true" name="twitter:data1" content="6 min read" />
    <link data-rh="true" rel="icon" href="https://miro.medium.com/fit/c/256/256/" />
    <link data-rh="true" rel="search" type="application/opensearchdescription+xml" title="Medium" href="/osd.xml" />
    <link data-rh="true" rel="apple-touch-icon" sizes="152x152" href="https://miro.medium.com/fit/c/152/152/1*sHhtYhaCe2Uc3IU0IgKwIQ.png" />
    <link data-rh="true" rel="apple-touch-icon" sizes="120x120" href="https://miro.medium.com/fit/c/120/120/1*sHhtYhaCe2Uc3IU0IgKwIQ.png" />
    <link data-rh="true" rel="apple-touch-icon" sizes="76x76" href="https://miro.medium.com/fit/c/76/76/1*sHhtYhaCe2Uc3IU0IgKwIQ.png" />
    <link data-rh="true" rel="apple-touch-icon" sizes="60x60" href="https://miro.medium.com/fit/c/60/60/1*sHhtYhaCe2Uc3IU0IgKwIQ.png" />
    <link data-rh="true" rel="mask-icon" href="https://cdn-static-1.medium.com/_/fp/icons/Medium-Avatar-500x500.svg" color="#171717" />
    <link data-rh="true" id="glyph_preload_link" rel="preload" as="style" type="text/css" href="https://glyph.medium.com/css/unbound.css" />
    <link data-rh="true" id="glyph_link" rel="stylesheet" type="text/css" href="https://glyph.medium.com/css/unbound.css" />
    <link data-rh="true" rel="author" href="https://medium.com/@avinashn" />
    <link data-rh="true" rel="canonical" href="https://justlaravel.com/how-to-implement-datatables-in-laravel/" />
    <link data-rh="true" rel="alternate" href="android-app://com.medium.reader/https/medium.com/p/de200c8d4467" />
    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=u5lwtGFNM2_yyGfAn4jYnfBkPKo3OCdy30VnxXL4ptzgY4LMCWF_7TglIzXt8lmluFCR75hnkZC0XPRd9oplDzuydLPfRVVYTXGWZcP1LAkgCYyplmV3Sce5Hg2s2ffGEg2LHaT4whmQXrMejs6KiQ" charset="UTF-8"></script>
    <script data-rh="true" type="application/ld+json">
        {
            "@context": "http:\u002F\u002Fschema.org",
            "@type": "NewsArticle",
            "image": ["https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F1200\u002F0*jHRjgulo5b4m2WJK.png"],
            "url": "https:\u002F\u002Fmedium.com\u002Fjustlaravel\u002Fhow-to-implement-datatables-in-laravel-de200c8d4467",
            "dateCreated": "2017-07-07T15:59:58.240Z",
            "datePublished": "2017-07-07T15:59:58.240Z",
            "dateModified": "2019-10-02T09:37:57.625Z",
            "headline": "How to implement datatables in laravel - justlaravel - Medium",
            "name": "How to implement datatables in laravel - justlaravel - Medium",
            "description": "Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for table extender, it provides the functionalities like search…",
            "identifier": "de200c8d4467",
            "author": {
                "@type": "Person",
                "name": "Avinash Nethala",
                "url": "https:\u002F\u002Fmedium.com\u002F@avinashn"
            },
            "creator": ["Avinash Nethala"],
            "publisher": {
                "@type": "Organization",
                "name": "justlaravel",
                "url": "https:\u002F\u002Fmedium.com\u002Fjustlaravel",
                "logo": {
                    "@type": "ImageObject",
                    "width": 60,
                    "height": 60,
                    "url": "https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F120\u002F1*G95ykj227pbelPTDsCd6BA.jpeg"
                }
            },
            "mainEntityOfPage": "https:\u002F\u002Fmedium.com\u002Fjustlaravel\u002Fhow-to-implement-datatables-in-laravel-de200c8d4467"
        }
    </script>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="STATIC">
        html {
            box-sizing: border-box
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit
        }

        body {
            margin: 0;
            padding: 0;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 0.8);
            position: relative;
            min-height: 100vh
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        dl,
        dd,
        ol,
        ul,
        menu,
        figure,
        blockquote,
        p,
        pre,
        form {
            margin: 0
        }

        menu,
        ol,
        ul {
            padding: 0;
            list-style: none;
            list-style-image: none
        }

        main {
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        a,
        button,
        input {
            -webkit-tap-highlight-color: transparent
        }

        img,
        svg {
            vertical-align: middle
        }

        button {
            background: transparent;
            overflow: visible
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0
        }

        :root {
            --reach-tabs: 1;
            --reach-menu-button: 1
        }

        #speechify-root {
            font-family: Sohne, sans-serif
        }

        div[data-popper-reference-hidden="true"] {
            visibility: hidden;
            pointer-events: none
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE">
        .a {
            font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
        }

        .b {
            font-weight: 400
        }

        .c {
            background-color: rgba(255, 255, 255, 1)
        }

        .l {
            display: block
        }

        .m {
            margin: auto
        }

        .n {
            max-width: 1504px
        }

        .o {
            display: flex
        }

        .u {
            justify-content: space-between
        }

        .ag {
            height: 100%
        }

        .al {
            padding: 0 24px
        }

        .am {
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.15)
        }

        .an {
            height: 56px
        }

        .ao {
            align-items: center
        }

        .ap {
            position: fixed
        }

        .aq {
            top: 0
        }

        .ar {
            right: 0
        }

        .as {
            left: 0
        }

        .at {
            z-index: 500
        }

        .au {
            color: inherit
        }

        .av {
            fill: inherit
        }

        .aw {
            font-size: inherit
        }

        .ax {
            border: inherit
        }

        .ay {
            font-family: inherit
        }

        .az {
            letter-spacing: inherit
        }

        .ba {
            font-weight: inherit
        }

        .bb {
            padding: 0
        }

        .bc {
            margin: 0
        }

        .bg:disabled {
            cursor: default
        }

        .bh:disabled {
            color: rgba(117, 117, 117, 1)
        }

        .bi:disabled {
            fill: rgba(117, 117, 117, 1)
        }

        .bj {
            height: 25px
        }

        .bk {
            fill: rgba(41, 41, 41, 1)
        }

        .bl {
            text-align: center
        }

        .bm {
            font-family: sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
        }

        .bn {
            font-size: 14px
        }

        .bo {
            line-height: 20px
        }

        .bp {
            color: rgba(242, 242, 242, 1)
        }

        .bq {
            padding: 7px 16px 9px
        }

        .br {
            fill: rgba(242, 242, 242, 1)
        }

        .bs {
            background: rgba(242, 242, 242, 1)
        }

        .bt {
            border-color: rgba(242, 242, 242, 1)
        }

        .bz:disabled {
            cursor: inherit !important
        }

        .ca:disabled {
            opacity: 0.1
        }

        .cb:disabled:hover {
            background: rgba(25, 25, 25, 1)
        }

        .cc:disabled:hover {
            border-color: rgba(25, 25, 25, 1)
        }

        .cd {
            border-radius: 99em
        }

        .ce {
            width: 100%
        }

        .cf {
            border-width: 1px
        }

        .cg {
            border-style: solid
        }

        .ch {
            box-sizing: border-box
        }

        .ci {
            display: inline-block
        }

        .cj {
            text-decoration: none
        }

        .ck {
            margin-left: 16px
        }

        .cl {
            display: none
        }

        .cn {
            color: rgba(117, 117, 117, 1)
        }

        .co {
            color: rgba(26, 137, 23, 1)
        }

        .cp {
            fill: rgba(26, 137, 23, 1)
        }

        .cs:disabled {
            color: rgba(163, 208, 162, 0.5)
        }

        .ct:disabled {
            fill: rgba(163, 208, 162, 0.5)
        }

        .cz {
            height: 100vh
        }

        .da {
            flex-direction: column
        }

        .db {
            position: sticky
        }

        .dc {
            height: 23px
        }

        .dd {
            padding-bottom: 35px
        }

        .de {
            fill: rgba(117, 117, 117, 1)
        }

        .df {
            padding-left: 28px
        }

        .dg {
            transition: all 0.2s ease-in-out
        }

        .dk {
            margin-right: 28px
        }

        .dm {
            font-size: 16px
        }

        .dn {
            line-height: 24px
        }

        .do {
            position: relative
        }

        .dp {
            margin: 0px 0px 35px 28px
        }

        .dq {
            width: 24px
        }

        .dr {
            border: 0
        }

        .ds {
            height: 1px
        }

        .dt {
            background-color: rgba(230, 230, 230, 1)
        }

        .du {
            padding: 0 24px 24px
        }

        .dv {
            height: 64px
        }

        .dw path {
            fill: rgba(168, 168, 168, 1)
        }

        .dx {
            justify-content: center
        }

        .dy {
            flex: 1
        }

        .dz {
            border: none
        }

        .ea {
            background: transparent
        }

        .eb {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15)
        }

        .ec {
            z-index: 600
        }

        .ed {
            bottom: 0
        }

        .ee {
            justify-content: space-around
        }

        .ef {
            height: 16px
        }

        .eg {
            background-color: rgba(237, 237, 237, 1)
        }

        .em {
            min-width: 0
        }

        .en {
            flex: 1 1 auto
        }

        .eo {
            padding: 0 32px
        }

        .ep {
            border-left: 1px solid rgba(230, 230, 230, 1)
        }

        .eq {
            min-height: 100vh
        }

        .er {
            width: 394px
        }

        .et {
            color: rgba(206, 92, 43, 1)
        }

        .eu {
            fill: rgba(206, 92, 43, 1)
        }

        .ex:disabled {
            color: rgba(206, 92, 43, 0.5)
        }

        .ey:disabled {
            fill: rgba(206, 92, 43, 0.5)
        }

        .ez {
            border-bottom: 1px solid rgba(230, 230, 230, 1)
        }

        .fj {
            margin-right: 16px
        }

        .fk {
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.05)
        }

        .fl {
            border-radius: 50%
        }

        .fm {
            height: 32px
        }

        .fn {
            width: 32px
        }

        .fo {
            position: absolute
        }

        .fp {
            background-color: rgba(242, 242, 242, 1)
        }

        .fq {
            margin-right: 3px
        }

        .fr {
            flex: 0 0 auto
        }

        .fs {
            overflow: hidden
        }

        .ft {
            max-height: 20px
        }

        .fu {
            text-overflow: ellipsis
        }

        .fv {
            display: -webkit-box
        }

        .fw {
            -webkit-line-clamp: 1
        }

        .fx {
            -webkit-box-orient: vertical
        }

        .fy {
            word-break: break-all
        }

        .ga {
            color: rgba(41, 41, 41, 1)
        }

        .gl {
            margin-left: auto
        }

        .gm {
            margin-right: auto
        }

        .gn {
            max-width: 728px
        }

        .gy {
            align-items: flex-start
        }

        .gz {
            height: 48px
        }

        .ha {
            width: 48px
        }

        .hb {
            margin-bottom: 4px
        }

        .hc {
            flex-direction: row
        }

        .hd {
            padding-left: 12px
        }

        .hi {
            font-size: 13px
        }

        .hj {
            color: rgba(255, 255, 255, 1)
        }

        .hk {
            padding: 0px 8px 1px
        }

        .hl {
            fill: rgba(255, 255, 255, 1)
        }

        .hm {
            background: rgba(206, 92, 43, 1)
        }

        .hn {
            border-color: rgba(206, 92, 43, 1)
        }

        .hq:disabled {
            opacity: 0.3
        }

        .hr:disabled:hover {
            background: rgba(206, 92, 43, 1)
        }

        .hs:disabled:hover {
            border-color: rgba(206, 92, 43, 1)
        }

        .ht {
            flex-wrap: wrap
        }

        .hu {
            padding: 0 8px
        }

        .hy {
            padding-right: 4px
        }

        .hz {
            padding: 8px 2px
        }

        .ib {
            margin: 0 4px 0 28px
        }

        .ic path {
            fill: rgba(41, 41, 41, 1)
        }

        .id {
            cursor: pointer
        }

        .ig svg path {
            fill: rgba(117, 117, 117, 1)
        }

        .ih {
            display: inline-flex
        }

        .ii {
            padding-top: 24px
        }

        .il {
            border: 1px solid rgba(230, 230, 230, 1)
        }

        .im {
            padding: 6px 15px 6px 10px
        }

        .io svg {
            margin-right: 8px
        }

        .ip {
            padding-right: 12px
        }

        .iq {
            background: rgba(255, 255, 255, 1)
        }

        .ir {
            border-radius: 4px
        }

        .is {
            box-shadow: 0 1px 4px rgba(230, 230, 230, 1)
        }

        .it {
            max-height: 100vh
        }

        .iu {
            overflow-y: auto
        }

        .iv {
            top: calc(100vh + 100px)
        }

        .iw {
            bottom: calc(100vh + 100px)
        }

        .ix {
            width: 10px
        }

        .iy {
            pointer-events: none
        }

        .iz {
            word-break: break-word
        }

        .ja {
            word-wrap: break-word
        }

        .jb:after {
            display: block
        }

        .jc:after {
            content: ""
        }

        .jd:after {
            clear: both
        }

        .je {
            line-height: 1.23
        }

        .jf {
            letter-spacing: 0
        }

        .jg {
            font-style: normal
        }

        .jh {
            font-weight: 700
        }

        .kc {
            margin-bottom: -0.27em
        }

        .kd {
            line-height: 1.58
        }

        .ke {
            letter-spacing: -0.004em
        }

        .kf {
            font-family: charter, Georgia, Cambria, "Times New Roman", Times, serif
        }

        .la {
            margin-bottom: -0.46em
        }

        .lb {
            text-decoration: underline
        }

        .lc {
            line-height: 1.31
        }

        .ld {
            letter-spacing: -0.022em
        }

        .le {
            font-weight: 600
        }

        .lz {
            margin-bottom: -0.37em
        }

        .mj {
            padding: 20px
        }

        .mk {
            overflow-x: auto
        }

        .ml {
            line-height: 1.18
        }

        .mm {
            font-family: Menlo, Monaco, "Courier New", Courier, monospace
        }

        .mn {
            margin-top: -0.09em
        }

        .mo {
            margin-bottom: -0.09em
        }

        .mp {
            white-space: pre-wrap
        }

        .mq {
            padding: 2px 4px
        }

        .mr {
            font-size: 75%
        }

        .ms>strong {
            font-family: inherit
        }

        .nk {
            margin-bottom: -0.31em
        }

        .nl {
            max-width: 1024px
        }

        .nm {
            clear: both
        }

        .no {
            cursor: zoom-in
        }

        .np {
            z-index: auto
        }

        .nr {
            padding-bottom: 51.285714285714285%
        }

        .ns {
            height: 0
        }

        .nt {
            max-width: 100%
        }

        .nu {
            height: auto
        }

        .nv {
            margin-top: 10px
        }

        .ny {
            max-width: 669px
        }

        .nz {
            padding-bottom: 86.84603886397609%
        }

        .oa {
            max-width: 639px
        }

        .ob {
            padding-bottom: 97.4960876369327%
        }

        .oc {
            max-width: 638px
        }

        .od {
            padding-bottom: 98.43260188087773%
        }

        .oe {
            max-width: 633px
        }

        .of {
            padding-bottom: 33.80726698262243%
        }

        .og {
            font-style: italic
        }

        .oh {
            margin-top: 32px
        }

        .oi {
            margin-bottom: 14px
        }

        .oj {
            padding-bottom: 10px
        }

        .ok {
            background-color: rgba(8, 8, 8, 1)
        }

        .ol {
            height: 3px
        }

        .om {
            width: 3px
        }

        .on {
            margin-right: 20px
        }

        .or {
            box-shadow: inset 0 0 0 1px rgba(230, 230, 230, 1)
        }

        .os {
            padding: 0px
        }

        .ot {
            padding: 16px 20px
        }

        .ov {
            max-height: 40px
        }

        .ow {
            -webkit-line-clamp: 2
        }

        .ox {
            margin-top: 8px
        }

        .oy {
            margin-top: 12px
        }

        .oz {
            width: 160px
        }

        .pa {
            background-image: url(https://miro.medium.com/max/320/0*gijjl-9UtIATiNnX.)
        }

        .pb {
            background-origin: border-box
        }

        .pc {
            background-size: cover
        }

        .pd {
            height: 167px
        }

        .pe {
            background-position: 50% 50%
        }

        .pf {
            padding-bottom: 56.206088992974244%
        }

        .pg {
            background-image: url(https://miro.medium.com/max/320/0*YKaUK54gfZtBDgAC.)
        }

        .ph {
            padding: 16px 0 0
        }

        .pi {
            border-top: none
        }

        .pj {
            height: 52px
        }

        .pk {
            max-height: 52px
        }

        .pl {
            box-sizing: content-box
        }

        .pm {
            position: static
        }

        .pn {
            z-index: 1
        }

        .po {
            flex: 1 0 auto
        }

        .pq {
            max-width: 155px
        }

        .pt {
            margin-right: 5px
        }

        .pw {
            -webkit-user-select: none
        }

        .pz {
            outline: 0
        }

        .qa {
            user-select: none
        }

        .qb>svg {
            pointer-events: none
        }

        .qk {
            cursor: progress
        }

        .qn {
            margin-left: 24px
        }

        .qo {
            margin-top: 0px
        }

        .qp {
            padding: 4px 0
        }

        .qr {
            margin-left: 4px
        }

        .qs {
            opacity: 1
        }

        .qt path {
            fill: rgba(117, 117, 117, 1)
        }

        .qv {
            margin: 0 20px
        }

        .qw {
            background-color: rgba(250, 250, 250, 1)
        }

        .qx {
            padding-bottom: 4px
        }

        .qy {
            padding-top: 32px
        }

        .qz {
            font-weight: 500
        }

        .rf {
            padding-top: 5px
        }

        .rg {
            padding-top: 25px
        }

        .rh {
            padding-bottom: 96px
        }

        .ri {
            padding-top: 40px
        }

        .rj {
            padding-bottom: 80px
        }

        .rk {
            padding-bottom: 26px
        }

        .su {
            flex-grow: 0
        }

        .sv {
            padding-bottom: 8px
        }

        .sw {
            margin-bottom: 24px
        }

        .sx {
            margin-right: 24px
        }

        .sy {
            flex: 1 0 0%
        }

        .sz {
            margin-bottom: 8px
        }

        .ta {
            margin-right: 8px
        }

        .tb {
            height: 20px
        }

        .tc {
            width: 20px
        }

        .td {
            max-height: 60px
        }

        .te {
            -webkit-line-clamp: 3
        }

        .tf {
            width: 56px
        }

        .tg {
            padding-bottom: 100%
        }

        .th {
            border-radius: 2px
        }

        .ti {
            padding: 30px 0
        }

        .tj {
            margin-bottom: 0
        }

        .tk {
            min-width: 100vw
        }

        .tl {
            background-color: rgba(0, 0, 0, 1)
        }

        .tq {
            max-width: 1192px
        }

        .tt:disabled {
            color: rgba(255, 255, 255, 0.6)
        }

        .tu:disabled {
            fill: rgba(255, 255, 255, 0.45)
        }

        .tv {
            height: 22px
        }

        .tw {
            margin-top: 20px
        }

        .tx {
            color: rgba(255, 255, 255, 0.95)
        }

        .tz {
            background-color: rgba(255, 255, 255, 0.4)
        }

        .ua {
            margin: 28px 0 20px
        }

        .ub {
            padding-bottom: 0px
        }

        .uc {
            border-bottom: none
        }

        .ud {
            margin-top: 40px
        }

        .ue {
            border-radius: 20px
        }

        .uf {
            width: inherit
        }

        .ug {
            outline: none
        }

        .uh {
            padding: 9px 0 11px
        }

        .ui {
            background-color: transparent
        }

        .uj::placeholder {
            color: rgba(117, 117, 117, 1)
        }

        .uk {
            padding: 7px 7px 6px 8px
        }

        .ul {
            height: 88px
        }

        .um {
            width: 88px
        }

        .un {
            margin-top: 16px
        }

        .uo {
            margin-top: 4px
        }

        .up {
            margin-top: 24px
        }

        .uq {
            margin-bottom: 40px
        }

        .ur {
            width: auto
        }

        .us {
            margin-left: 8px
        }

        .ut {
            stroke: rgba(242, 242, 242, 1)
        }

        .uu {
            height: 36px
        }

        .uv {
            width: 36px
        }

        .uw {
            padding: 24px 0
        }

        .ux {
            margin-right: 6px
        }

        .uy {
            font-size: 11px
        }

        .uz {
            line-height: 16px
        }

        .bd:hover {
            cursor: pointer
        }

        .be:hover {
            color: rgba(25, 25, 25, 1)
        }

        .bf:hover {
            fill: rgba(25, 25, 25, 1)
        }

        .bu:hover {
            background: rgba(242, 242, 242, 1)
        }

        .bv:hover {
            border-color: rgba(242, 242, 242, 1)
        }

        .bw:hover {
            cursor: wait
        }

        .bx:hover {
            color: rgba(242, 242, 242, 1)
        }

        .by:hover {
            fill: rgba(242, 242, 242, 1)
        }

        .cq:hover {
            color: rgba(15, 115, 12, 1)
        }

        .cr:hover {
            fill: rgba(15, 115, 12, 1)
        }

        .dh:hover {
            color: rgba(41, 41, 41, 1)
        }

        .di:hover {
            fill: rgba(41, 41, 41, 1)
        }

        .ev:hover {
            color: rgba(175, 82, 42, 1)
        }

        .ew:hover {
            fill: rgba(175, 82, 42, 1)
        }

        .ho:hover {
            background: rgba(175, 82, 42, 1)
        }

        .hp:hover {
            border-color: rgba(175, 82, 42, 1)
        }

        .ia:hover path {
            fill: rgba(8, 8, 8, 1)
        }

        .ie:hover svg path {
            fill: rgba(8, 8, 8, 1)
        }

        .in:hover {
            border-color: rgba(204, 204, 204, 1)
        }

        .py:hover {
            fill: rgba(8, 8, 8, 1)
        }

        .qq:hover p {
            color: rgba(8, 8, 8, 1)
        }

        .tr:hover {
            color: rgba(255, 255, 255, 1)
        }

        .ts:hover {
            fill: rgba(255, 255, 255, 0.9)
        }

        .ty:hover {
            text-decoration: underline
        }

        .if:focus svg path {
            fill: rgba(8, 8, 8, 1)
        }

        .nq:focus {
            transform: scale(1.01)
        }

        .px:focus {
            fill: rgba(8, 8, 8, 1)
        }

        .qu:focus path {
            fill: rgba(8, 8, 8, 1)
        }

        .qc:active {
            border-style: none
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (min-width: 1080px)">
        .d {
            display: none
        }

        .t {
            flex-direction: row
        }

        .z {
            width: 80px
        }

        .ab {
            min-height: 100vh
        }

        .ac {
            flex-shrink: 1
        }

        .ae {
            border-right: 1px solid rgba(230, 230, 230, 1)
        }

        .cu {
            display: block
        }

        .cv {
            text-align: center
        }

        .cw {
            padding: 40px 0
        }

        .el {
            margin-bottom: 0
        }

        .fg {
            margin: 0 32px
        }

        .fh {
            max-width: 692px
        }

        .gf {
            margin-bottom: 40px
        }

        .gk {
            padding: 0 16px
        }

        .gw {
            margin-bottom: 32px
        }

        .gx {
            margin-top: 56px
        }

        .hx {
            display: inline-flex
        }

        .jy {
            font-size: 32px
        }

        .jz {
            margin-top: 0.6em
        }

        .ka {
            line-height: 40px
        }

        .kb {
            letter-spacing: -0.016em
        }

        .kw {
            font-size: 20px
        }

        .kx {
            margin-top: 2em
        }

        .ky {
            line-height: 32px
        }

        .kz {
            letter-spacing: -0.003em
        }

        .lv {
            font-size: 22px
        }

        .lw {
            margin-top: 3.14em
        }

        .lx {
            line-height: 28px
        }

        .ly {
            letter-spacing: 0
        }

        .me {
            margin-top: 0.86em
        }

        .mx {
            margin-top: 1.91em
        }

        .ni {
            margin-top: 2.37em
        }

        .nj {
            line-height: 24px
        }

        .oq {
            margin-top: 32px
        }

        .qj {
            margin-top: 0px
        }

        .qm {
            display: inline-block
        }

        .re {
            max-height: 24px
        }

        .rx {
            width: calc(100% + 64px)
        }

        .ry {
            margin-left: -32px
        }

        .rz {
            margin-right: -32px
        }

        .sq {
            padding-left: 32px
        }

        .sr {
            padding-right: 32px
        }

        .ss {
            flex-basis: 50%
        }

        .st {
            max-width: 50%
        }

        .tp {
            margin: 0 64px
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (max-width: 1079.98px)">
        .e {
            display: none
        }

        .nw {
            margin-left: auto
        }

        .nx {
            text-align: center
        }

        .qi {
            margin-top: 0px
        }

        .ql {
            display: inline-block
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (max-width: 903.98px)">
        .f {
            display: none
        }

        .ps {
            display: inline-block
        }

        .qh {
            margin-top: 0px
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (max-width: 727.98px)">
        .g {
            display: none
        }

        .cm {
            display: block
        }

        .ou {
            padding: 10px 12px 10px
        }

        .pr {
            display: inline-block
        }

        .qf {
            margin-top: 0px
        }

        .qg {
            margin-right: 0px
        }

        .tm {
            padding: 24px 0
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (max-width: 551.98px)">
        .h {
            display: none
        }

        .p {
            flex-direction: column
        }

        .v {
            width: auto
        }

        .ah {
            display: block
        }

        .eh {
            margin-bottom: 56px
        }

        .fa {
            margin: 0 24px
        }

        .gb {
            margin-bottom: 80px
        }

        .gg {
            padding: 0 8px
        }

        .go {
            margin-bottom: 24px
        }

        .gp {
            margin-top: 32px
        }

        .he {
            display: inline-block
        }

        .ij {
            display: flex
        }

        .ji {
            font-size: 32px
        }

        .jj {
            margin-top: 0.64em
        }

        .jk {
            line-height: 40px
        }

        .jl {
            letter-spacing: -0.016em
        }

        .kg {
            font-size: 18px
        }

        .kh {
            margin-top: 1.56em
        }

        .ki {
            line-height: 28px
        }

        .kj {
            letter-spacing: -0.003em
        }

        .lf {
            font-size: 20px
        }

        .lg {
            margin-top: 1.9em
        }

        .lh {
            line-height: 24px
        }

        .li {
            letter-spacing: 0
        }

        .ma {
            margin-top: 0.67em
        }

        .mf {
            margin-top: 40px
        }

        .mt {
            margin-top: 1.41em
        }

        .my {
            font-size: 16px
        }

        .mz {
            margin-top: 2.07em
        }

        .na {
            line-height: 20px
        }

        .oo {
            margin-top: 24px
        }

        .pu {
            margin-left: 0px
        }

        .qd {
            margin-top: 0px
        }

        .qe {
            margin-right: 0px
        }

        .ra {
            max-height: 20px
        }

        .rl {
            width: calc(100% + 24px)
        }

        .rm {
            margin-left: -12px
        }

        .rn {
            margin-right: -12px
        }

        .sa {
            padding-left: 12px
        }

        .sb {
            padding-right: 12px
        }

        .sc {
            flex-basis: 100%
        }

        .sd {
            max-width: 100%
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (min-width: 904px) and (max-width: 1079.98px)">
        .i {
            display: none
        }

        .s {
            flex-direction: column
        }

        .y {
            width: auto
        }

        .ak {
            display: block
        }

        .ek {
            margin-bottom: 56px
        }

        .fe {
            margin: 0 32px
        }

        .ff {
            max-width: 692px
        }

        .ge {
            margin-bottom: 40px
        }

        .gj {
            padding: 0 16px
        }

        .gu {
            margin-bottom: 24px
        }

        .gv {
            margin-top: 32px
        }

        .hh {
            display: inline-block
        }

        .hw {
            display: inline-flex
        }

        .ju {
            font-size: 32px
        }

        .jv {
            margin-top: 0.6em
        }

        .jw {
            line-height: 40px
        }

        .jx {
            letter-spacing: -0.016em
        }

        .ks {
            font-size: 20px
        }

        .kt {
            margin-top: 2em
        }

        .ku {
            line-height: 32px
        }

        .kv {
            letter-spacing: -0.003em
        }

        .lr {
            font-size: 22px
        }

        .ls {
            margin-top: 3.14em
        }

        .lt {
            line-height: 28px
        }

        .lu {
            letter-spacing: 0
        }

        .md {
            margin-top: 0.86em
        }

        .mi {
            margin-top: 56px
        }

        .mw {
            margin-top: 1.91em
        }

        .ng {
            margin-top: 2.37em
        }

        .nh {
            line-height: 24px
        }

        .rd {
            max-height: 24px
        }

        .ru {
            width: calc(100% + 64px)
        }

        .rv {
            margin-left: -32px
        }

        .rw {
            margin-right: -32px
        }

        .sm {
            padding-left: 32px
        }

        .sn {
            padding-right: 32px
        }

        .so {
            flex-basis: 50%
        }

        .sp {
            max-width: 50%
        }

        .to {
            margin: 0 64px
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (min-width: 728px) and (max-width: 903.98px)">
        .j {
            display: none
        }

        .r {
            flex-direction: column
        }

        .x {
            width: auto
        }

        .aj {
            display: block
        }

        .ej {
            margin-bottom: 56px
        }

        .fc {
            margin: 0 32px
        }

        .fd {
            max-width: 692px
        }

        .gd {
            margin-bottom: 40px
        }

        .gi {
            padding: 0 16px
        }

        .gs {
            margin-bottom: 24px
        }

        .gt {
            margin-top: 32px
        }

        .hg {
            display: inline-block
        }

        .hv {
            display: inline-flex
        }

        .jq {
            font-size: 32px
        }

        .jr {
            margin-top: 0.6em
        }

        .js {
            line-height: 40px
        }

        .jt {
            letter-spacing: -0.016em
        }

        .ko {
            font-size: 20px
        }

        .kp {
            margin-top: 2em
        }

        .kq {
            line-height: 32px
        }

        .kr {
            letter-spacing: -0.003em
        }

        .ln {
            font-size: 22px
        }

        .lo {
            margin-top: 3.14em
        }

        .lp {
            line-height: 28px
        }

        .lq {
            letter-spacing: 0
        }

        .mc {
            margin-top: 0.86em
        }

        .mh {
            margin-top: 56px
        }

        .mv {
            margin-top: 1.91em
        }

        .ne {
            margin-top: 2.37em
        }

        .nf {
            line-height: 24px
        }

        .rc {
            max-height: 24px
        }

        .rr {
            width: calc(100% + 64px)
        }

        .rs {
            margin-left: -32px
        }

        .rt {
            margin-right: -32px
        }

        .si {
            padding-left: 32px
        }

        .sj {
            padding-right: 32px
        }

        .sk {
            flex-basis: 50%
        }

        .sl {
            max-width: 50%
        }

        .tn {
            margin: 0 48px
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (min-width: 552px) and (max-width: 727.98px)">
        .k {
            display: none
        }

        .q {
            flex-direction: column
        }

        .w {
            width: auto
        }

        .ai {
            display: block
        }

        .ei {
            margin-bottom: 56px
        }

        .fb {
            margin: 0 24px
        }

        .gc {
            margin-bottom: 80px
        }

        .gh {
            padding: 0 8px
        }

        .gq {
            margin-bottom: 24px
        }

        .gr {
            margin-top: 32px
        }

        .hf {
            display: inline-block
        }

        .ik {
            display: flex
        }

        .jm {
            font-size: 32px
        }

        .jn {
            margin-top: 0.64em
        }

        .jo {
            line-height: 40px
        }

        .jp {
            letter-spacing: -0.016em
        }

        .kk {
            font-size: 18px
        }

        .kl {
            margin-top: 1.56em
        }

        .km {
            line-height: 28px
        }

        .kn {
            letter-spacing: -0.003em
        }

        .lj {
            font-size: 20px
        }

        .lk {
            margin-top: 1.9em
        }

        .ll {
            line-height: 24px
        }

        .lm {
            letter-spacing: 0
        }

        .mb {
            margin-top: 0.67em
        }

        .mg {
            margin-top: 40px
        }

        .mu {
            margin-top: 1.41em
        }

        .nb {
            font-size: 16px
        }

        .nc {
            margin-top: 2.07em
        }

        .nd {
            line-height: 20px
        }

        .op {
            margin-top: 24px
        }

        .pv {
            margin-left: 0px
        }

        .rb {
            max-height: 20px
        }

        .ro {
            width: calc(100% + 64px)
        }

        .rp {
            margin-left: -32px
        }

        .rq {
            margin-right: -32px
        }

        .se {
            padding-left: 32px
        }

        .sf {
            padding-right: 32px
        }

        .sg {
            flex-basis: 50%
        }

        .sh {
            max-width: 50%
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="print">
        .pp {
            display: none
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (min-width: 7000px)">
        .af {
            width: 224px
        }

        .cx {
            text-align: left
        }

        .cy {
            padding: 40px 24px
        }

        .dj {
            display: none
        }

        .dl {
            display: block
        }

        .fi {
            margin: 0 auto
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="all and (max-width: 1239.98px)">
        .es {
            width: 280px
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="(orientation: landscape) and (max-width: 903.98px)">
        .fz {
            max-height: none
        }
    </style>
    <style type="text/css" data-fela-rehydration="571" data-fela-type="RULE" media="(prefers-reduced-motion: no-preference)">
        .nn {
            transition: transform 300ms cubic-bezier(0.2, 0, 0.2, 1)
        }
    </style>
</head>

<body>
    <div id="root">
        <div class="a b c">
            <div class="d e f g h i j k"></div>
            <script>
                document.domain = document.domain;
            </script>
            <div class="l c">
                <div class="m n l">
                    <div class="o p q r s t u">
                        <div class="v w x y z ab ac ae af">
                            <nav class="ag">
                                <div class="ah ai aj ak d">
                                    <div class="al am an o ao u ap aq ar as at c"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Homepage" rel="noopener follow" href="/"><svg viewBox="0 0 1043.63 592.71" class="bj bk">
                                                <g data-name="Layer 2">
                                                    <g data-name="Layer 1">
                                                        <path d="M588.67 296.36c0 163.67-131.78 296.35-294.33 296.35S0 460 0 296.36 131.78 0 294.34 0s294.33 132.69 294.33 296.36M911.56 296.36c0 154.06-65.89 279-147.17 279s-147.17-124.94-147.17-279 65.88-279 147.16-279 147.17 124.9 147.17 279M1043.63 296.36c0 138-23.17 249.94-51.76 249.94s-51.75-111.91-51.75-249.94 23.17-249.94 51.75-249.94 51.76 111.9 51.76 249.94"></path>
                                                    </g>
                                                </g>
                                            </svg></a>
                                        <div class="o ao">
                                            <div class="ck cl cm"><span class="bm b bn bo cn"><a class="et eu aw ax ay az ba bb bc bd ev ew bg ex ey" href="https://rsci.app.link/?$canonical_url=https%3A%2F%2Fmedium.com/p/de200c8d4467&amp;~feature=LoOpenInAppButton&amp;~channel=ShowPostUnderCollection&amp;~stage=mobileNavBar" rel="noopener follow">Open in app</a></span></div>
                                        </div>
                                    </div>
                                    <div class="an l"></div>
                                </div>
                                <div class="ag h k j i cu">
                                    <div class="cz o da u db aq at c">
                                        <div class="cv cw cx cy"><a aria-label="Homepage" rel="noopener follow" href="/"><svg viewBox="0 0 1043.63 592.71" class="dc bk">
                                                    <g data-name="Layer 2">
                                                        <g data-name="Layer 1">
                                                            <path d="M588.67 296.36c0 163.67-131.78 296.35-294.33 296.35S0 460 0 296.36 131.78 0 294.34 0s294.33 132.69 294.33 296.36M911.56 296.36c0 154.06-65.89 279-147.17 279s-147.17-124.94-147.17-279 65.88-279 147.16-279 147.17 124.9 147.17 279M1043.63 296.36c0 138-23.17 249.94-51.76 249.94s-51.75-111.91-51.75-249.94 23.17-249.94 51.75-249.94 51.76 111.9 51.76 249.94"></path>
                                                        </g>
                                                    </g>
                                                </svg></a></div>
                                        <div class="l">
                                            <div class="dd l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/">
                                                    <div class="o do">
                                                        <div class="cn de o df dg dh di">
                                                            <div class="l dj dk">
                                                                <div>
                                                                    <div class="ci" aria-hidden="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Home">
                                                                            <path d="M4.5 10.75v10.5c0 .14.11.25.25.25h5c.14 0 .25-.11.25-.25v-5.5c0-.14.11-.25.25-.25h3.5c.14 0 .25.11.25.25v5.5c0 .14.11.25.25.25h5c.14 0 .25-.11.25-.25v-10.5M22 9l-9.1-6.83a1.5 1.5 0 0 0-1.8 0L2 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg></div>
                                                                </div>
                                                            </div>
                                                            <div class="cl dl dk" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Home">
                                                                    <path d="M4.5 10.75v10.5c0 .14.11.25.25.25h5c.14 0 .25-.11.25-.25v-5.5c0-.14.11-.25.25-.25h3.5c.14 0 .25.11.25.25v5.5c0 .14.11.25.25.25h5c.14 0 .25-.11.25-.25v-10.5M22 9l-9.1-6.83a1.5 1.5 0 0 0-1.8 0L2 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg></div>
                                                            <div class="cl dl bm b dm dn">Home</div>
                                                        </div>
                                                    </div>
                                                </a></div><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fme%2Fnotifications&amp;source=--------------------------notifications_sidenav-----------">
                                                    <div class="dd l">
                                                        <div class="o do">
                                                            <div class="cn de o df dg dh di">
                                                                <div class="l dj dk">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Notifications">
                                                                                <path d="M15 18.5a3 3 0 1 1-6 0" stroke="currentColor" stroke-linecap="round"></path>
                                                                                <path d="M5.5 10.53V9a6.5 6.5 0 0 1 13 0v1.53c0 1.42.56 2.78 1.57 3.79l.03.03c.26.26.4.6.4.97v2.93c0 .14-.11.25-.25.25H3.75a.25.25 0 0 1-.25-.25v-2.93c0-.37.14-.71.4-.97l.03-.03c1-1 1.57-2.37 1.57-3.79z" stroke="currentColor" stroke-linejoin="round"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                                <div class="cl dl dk" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Notifications">
                                                                        <path d="M15 18.5a3 3 0 1 1-6 0" stroke="currentColor" stroke-linecap="round"></path>
                                                                        <path d="M5.5 10.53V9a6.5 6.5 0 0 1 13 0v1.53c0 1.42.56 2.78 1.57 3.79l.03.03c.26.26.4.6.4.97v2.93c0 .14-.11.25-.25.25H3.75a.25.25 0 0 1-.25-.25v-2.93c0-.37.14-.71.4-.97l.03-.03c1-1 1.57-2.37 1.57-3.79z" stroke="currentColor" stroke-linejoin="round"></path>
                                                                    </svg></div>
                                                                <div class="cl dl bm b dm dn">Notifications</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></span><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fme%2Flists&amp;source=--------------------------lists_sidenav-----------">
                                                    <div class="dd l">
                                                        <div class="o do">
                                                            <div class="cn de o df dg dh di">
                                                                <div class="l dj dk">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Lists">
                                                                                <path d="M4.5 6.25V21c0 .2.24.32.4.2l5.45-4.09a.25.25 0 0 1 .3 0l5.45 4.09c.16.12.4 0 .4-.2V6.25a.25.25 0 0 0-.25-.25H4.75a.25.25 0 0 0-.25.25z" stroke="currentColor" stroke-linecap="round"></path>
                                                                                <path d="M8 6V3.25c0-.14.11-.25.25-.25h11.5c.14 0 .25.11.25.25V16.5" stroke="currentColor" stroke-linecap="round"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                                <div class="cl dl dk" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Lists">
                                                                        <path d="M4.5 6.25V21c0 .2.24.32.4.2l5.45-4.09a.25.25 0 0 1 .3 0l5.45 4.09c.16.12.4 0 .4-.2V6.25a.25.25 0 0 0-.25-.25H4.75a.25.25 0 0 0-.25.25z" stroke="currentColor" stroke-linecap="round"></path>
                                                                        <path d="M8 6V3.25c0-.14.11-.25.25-.25h11.5c.14 0 .25.11.25.25V16.5" stroke="currentColor" stroke-linecap="round"></path>
                                                                    </svg></div>
                                                                <div class="cl dl bm b dm dn">Lists</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></span><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fme%2Fstories%2Fdrafts&amp;source=--------------------------stories_sidenav-----------">
                                                    <div class="dd l">
                                                        <div class="o do">
                                                            <div class="cn de o df dg dh di">
                                                                <div class="l dj dk">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Stories">
                                                                                <path d="M4.75 21.5h14.5c.14 0 .25-.11.25-.25V2.75a.25.25 0 0 0-.25-.25H4.75a.25.25 0 0 0-.25.25v18.5c0 .14.11.25.25.25z" stroke="currentColor"></path>
                                                                                <path d="M8 8.5h8M8 15.5h5M8 12h8" stroke="currentColor" stroke-linecap="round"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                                <div class="cl dl dk" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Stories">
                                                                        <path d="M4.75 21.5h14.5c.14 0 .25-.11.25-.25V2.75a.25.25 0 0 0-.25-.25H4.75a.25.25 0 0 0-.25.25v18.5c0 .14.11.25.25.25z" stroke="currentColor"></path>
                                                                        <path d="M8 8.5h8M8 15.5h5M8 12h8" stroke="currentColor" stroke-linecap="round"></path>
                                                                    </svg></div>
                                                                <div class="cl dl bm b dm dn">Stories</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></span>
                                            <div class="dp dq l">
                                                <hr class="dr ds dt bc" aria-hidden="true" />
                                            </div><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fnew-story&amp;source=--------------------------new_post_sidenav-----------">
                                                    <div class="dd l">
                                                        <div class="o do">
                                                            <div class="cn de o df dg dh di">
                                                                <div class="l dj dk">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Write">
                                                                                <path d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z" fill="currentColor"></path>
                                                                                <path d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.1-.1.26-.1.36 0l1.64 1.64c.1.1.1.26 0 .36L19.5 6.5m-2-2l2 2" stroke="currentColor"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                                <div class="cl dl dk" aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Write">
                                                                        <path d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z" fill="currentColor"></path>
                                                                        <path d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.1-.1.26-.1.36 0l1.64 1.64c.1.1.1.26 0 .36L19.5 6.5m-2-2l2 2" stroke="currentColor"></path>
                                                                    </svg></div>
                                                                <div class="cl dl bm b dm dn">Write</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></span>
                                        </div>
                                        <div class="du dv o ao"></div>
                                    </div>
                                </div>
                                <div class="ah ai aj ak d">
                                    <div class="l ap ar ed as at c">
                                        <div class="eb an do ec">
                                            <div class="ag o ao ee">
                                                <div class="ef dq l eg"></div>
                                                <div class="ef dq l eg"></div>
                                                <div class="ef dq l eg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <main class="eh ei ej ek el em l en">
                            <div class="l">
                                <div class="ez l">
                                    <div class="o dx">
                                        <div class="em ce fa fb fc fd fe ff fg fh fi">
                                            <div class="an o ao">
                                                <div class="fj l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://medium.com/justlaravel?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">
                                                        <div class="l do"><img alt="justlaravel" class="l ch fl fm fn fp" src="https://miro.medium.com/fit/c/32/32/1*g8pXMAd262UQAqn9VPgvZg.png" width="32" height="32" />
                                                            <div class="fk fl l fm fn fo aq"></div>
                                                        </div>
                                                    </a></div>
                                                <div class="fq l fr">
                                                    <div class="bm b bn bo cn">Published in</div>
                                                </div><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://medium.com/justlaravel?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">
                                                    <p class="bm b bn bo fs ft fu fv fw fx fy fz ga">justlaravel</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gb gc gd ge gf l">
                                    <div class="o dx">
                                        <div class="em ce fa fb fc fd fe ff fg fh fi">
                                            <article>
                                                <div class="l">
                                                    <div class="gg gh gi gj gk gl gm ce gn ch l"></div>
                                                    <div class="l">
                                                        <header class="pw-post-byline-header go gp gq gr gs gt gu gv gw gx l">
                                                            <div class="o gy u">
                                                                <div class="o">
                                                                    <div class="fj l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@avinashn?source=post_page-----de200c8d4467--------------------------------">
                                                                            <div class="l do"><img alt="Avinash Nethala" class="l ch fl gz ha fp" src="https://miro.medium.com/fit/c/48/48/1*PkI361PMd8PTBjqB8LQvJg.jpeg" width="48" height="48" />
                                                                                <div class="fk fl l gz ha fo aq"></div>
                                                                            </div>
                                                                        </a></div>
                                                                    <div class="l">
                                                                        <div class="pw-author bm b dm dn ga">
                                                                            <div class="hb o hc">
                                                                                <div>
                                                                                    <div class="ci" aria-hidden="false"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@avinashn?source=post_page-----de200c8d4467--------------------------------">Avinash Nethala</a></div>
                                                                                </div>
                                                                                <div class="hd he hf hg hh d"><span><button class="bm b hi bo hj hk hl hm hn ho hp bd bz hq hr hs cd cf cg ch ci cj">Follow</button></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="o ao ht">
                                                                            <p class="pw-published-date bm b bn bo cn"><span>Jul 7, 2017</span></p>
                                                                            <div class="hu ci" aria-hidden="true"><span class="l" aria-hidden="true"><span class="bm b bn bo cn">·</span></span></div>
                                                                            <div class="pw-reading-time bm b bn bo cn">6 min read</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="o ao">
                                                                    <div class="h k hv hw hx">
                                                                        <div class="hy l fr">
                                                                            <div>
                                                                                <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on twitter"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                <path d="M20 5.34c-.67.41-1.4.7-2.18.87a3.45 3.45 0 0 0-5.02-.1 3.49 3.49 0 0 0-1.02 2.47c0 .28.03.54.07.8a9.91 9.91 0 0 1-7.17-3.66 3.9 3.9 0 0 0-.5 1.74 3.6 3.6 0 0 0 1.56 2.92 3.36 3.36 0 0 1-1.55-.44V10c0 1.67 1.2 3.08 2.8 3.42-.3.06-.6.1-.94.12l-.62-.06a3.5 3.5 0 0 0 3.24 2.43 7.34 7.34 0 0 1-4.36 1.49l-.81-.05a9.96 9.96 0 0 0 5.36 1.56c6.4 0 9.91-5.32 9.9-9.9v-.5c.69-.49 1.28-1.1 1.74-1.81-.63.3-1.3.48-2 .56A3.33 3.33 0 0 0 20 5.33" fill="#A8A8A8"></path>
                                                                                            </svg></span></button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hy l fr">
                                                                            <div>
                                                                                <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on facebook"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                <path d="M19.75 12.04c0-4.3-3.47-7.79-7.75-7.79a7.77 7.77 0 0 0-5.9 12.84 7.77 7.77 0 0 0 4.69 2.63v-5.49h-1.9v-2.2h1.9v-1.62c0-1.88 1.14-2.9 2.8-2.9.8 0 1.49.06 1.69.08v1.97h-1.15c-.91 0-1.1.43-1.1 1.07v1.4h2.17l-.28 2.2h-1.88v5.52a7.77 7.77 0 0 0 6.7-7.71" fill="#A8A8A8"></path>
                                                                                            </svg></span></button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="hy l fr">
                                                                            <div>
                                                                                <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on linkedin"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                <path d="M19.75 5.39v13.22a1.14 1.14 0 0 1-1.14 1.14H5.39a1.14 1.14 0 0 1-1.14-1.14V5.39a1.14 1.14 0 0 1 1.14-1.14h13.22a1.14 1.14 0 0 1 1.14 1.14zM8.81 10.18H6.53v7.3H8.8v-7.3zM9 7.67a1.31 1.31 0 0 0-1.3-1.32h-.04a1.32 1.32 0 0 0 0 2.64A1.31 1.31 0 0 0 9 7.71v-.04zm8.46 5.37c0-2.2-1.4-3.05-2.78-3.05a2.6 2.6 0 0 0-2.3 1.18h-.07v-1h-2.14v7.3h2.28V13.6a1.51 1.51 0 0 1 1.36-1.63h.09c.72 0 1.26.45 1.26 1.6v3.91h2.28l.02-4.43z" fill="#A8A8A8"></path>
                                                                                            </svg></span></button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="l fr">
                                                                            <div>
                                                                                <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57 14.67c0-.57.13-1.11.38-1.6l.02-.02v-.02l.02-.02c0-.02 0-.02.02-.02.12-.26.3-.52.57-.8L7.78 9v-.02l.01-.02c.44-.41.91-.7 1.44-.85a4.87 4.87 0 0 0-1.19 2.36A5.04 5.04 0 0 0 8 11.6L6.04 13.6c-.19.19-.32.4-.38.65a2 2 0 0 0 0 .9c.08.2.2.4.38.57l1.29 1.31c.27.28.62.42 1.03.42.42 0 .78-.14 1.06-.42l1.23-1.25.79-.78 1.15-1.16c.08-.09.19-.22.28-.4.1-.2.15-.42.15-.67 0-.16-.02-.3-.06-.45l-.02-.02v-.02l-.07-.14s0-.03-.04-.06l-.06-.13-.02-.02c0-.02 0-.03-.02-.05a.6.6 0 0 0-.14-.16l-.48-.5c0-.04.02-.1.04-.15l.06-.12 1.17-1.14.09-.09.56.57c.02.04.08.1.16.18l.05.04.03.06.04.05.03.04.04.06.1.14.02.02c0 .02.01.03.03.04l.1.2v.02c.1.16.2.38.3.68a1 1 0 0 1 .04.25 3.2 3.2 0 0 1 .02 1.33 3.49 3.49 0 0 1-.95 1.87l-.66.67-.97.97-1.56 1.57a3.4 3.4 0 0 1-2.47 1.02c-.97 0-1.8-.34-2.49-1.03l-1.3-1.3a3.55 3.55 0 0 1-1-2.51v-.01h-.02v.02zm5.39-3.43c0-.19.02-.4.07-.63.13-.74.44-1.37.95-1.87l.66-.67.97-.98 1.56-1.56c.68-.69 1.5-1.03 2.47-1.03.97 0 1.8.34 2.48 1.02l1.3 1.32a3.48 3.48 0 0 1 1 2.48c0 .58-.11 1.11-.37 1.6l-.02.02v.02l-.02.04c-.14.27-.35.54-.6.8L16.23 15l-.01.02-.01.02c-.44.42-.92.7-1.43.83a4.55 4.55 0 0 0 1.23-3.52L18 10.38c.18-.21.3-.42.35-.65a2.03 2.03 0 0 0-.01-.9 1.96 1.96 0 0 0-.36-.58l-1.3-1.3a1.49 1.49 0 0 0-1.06-.42c-.42 0-.77.14-1.06.4l-1.2 1.27-.8.8-1.16 1.15c-.08.08-.18.21-.29.4a1.66 1.66 0 0 0-.08 1.12l.02.03v.02l.06.14s.01.03.05.06l.06.13.02.02.01.02.01.02c.05.08.1.13.14.16l.47.5c0 .04-.02.09-.04.15l-.06.12-1.15 1.15-.1.08-.56-.56a2.3 2.3 0 0 0-.18-.19c-.02-.01-.02-.03-.02-.04l-.02-.02a.37.37 0 0 1-.1-.12c-.03-.03-.05-.04-.05-.06l-.1-.15-.02-.02-.02-.04-.08-.17v-.02a5.1 5.1 0 0 1-.28-.69 1.03 1.03 0 0 1-.04-.26c-.06-.23-.1-.46-.1-.7v.01z" fill="#A8A8A8"></path>
                                                                                            </svg></span></button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ib o ao"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=https%3A%2F%2Fmedium.com%2F_%2Fbookmark%2Fp%2Fde200c8d4467&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;source=--------------------------bookmark_header-----------"><button aria-controls="addToCatalogBookmarkButton" aria-expanded="false" aria-label="Add to list bookmark button" class="au de aw ax ay az ba hz bc id ie if ig"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" class="ic" aria-label="Add to list bookmark button">
                                                                                            <path d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z" fill="#292929"></path>
                                                                                        </svg></button></a></span></div>
                                                                    </div>
                                                                    <div class="ck ih">
                                                                        <div>
                                                                            <div class="ci" aria-hidden="false"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ii ij ik j i d">
                                                                <div class="fj l"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=https%3A%2F%2Fmedium.com%2F_%2Fbookmark%2Fp%2Fde200c8d4467&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;source=--------------------------bookmark_header-----------"><button aria-controls="addToCatalogBookmarkButton" aria-expanded="false" aria-label="Add to list bookmark button" class="au de aw il ay az ba im bc id cd o ao in io ig"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" class="ic" aria-label="Add to list bookmark button">
                                                                                    <path d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z" fill="#292929"></path>
                                                                                </svg>
                                                                                <p class="bm b bn bo cn">Save</p>
                                                                            </button></a></span></div>
                                                                <div class="ip l fr">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on twitter"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <path d="M20 5.34c-.67.41-1.4.7-2.18.87a3.45 3.45 0 0 0-5.02-.1 3.49 3.49 0 0 0-1.02 2.47c0 .28.03.54.07.8a9.91 9.91 0 0 1-7.17-3.66 3.9 3.9 0 0 0-.5 1.74 3.6 3.6 0 0 0 1.56 2.92 3.36 3.36 0 0 1-1.55-.44V10c0 1.67 1.2 3.08 2.8 3.42-.3.06-.6.1-.94.12l-.62-.06a3.5 3.5 0 0 0 3.24 2.43 7.34 7.34 0 0 1-4.36 1.49l-.81-.05a9.96 9.96 0 0 0 5.36 1.56c6.4 0 9.91-5.32 9.9-9.9v-.5c.69-.49 1.28-1.1 1.74-1.81-.63.3-1.3.48-2 .56A3.33 3.33 0 0 0 20 5.33" fill="#A8A8A8"></path>
                                                                                    </svg></span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="ip l fr">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on facebook"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <path d="M19.75 12.04c0-4.3-3.47-7.79-7.75-7.79a7.77 7.77 0 0 0-5.9 12.84 7.77 7.77 0 0 0 4.69 2.63v-5.49h-1.9v-2.2h1.9v-1.62c0-1.88 1.14-2.9 2.8-2.9.8 0 1.49.06 1.69.08v1.97h-1.15c-.91 0-1.1.43-1.1 1.07v1.4h2.17l-.28 2.2h-1.88v5.52a7.77 7.77 0 0 0 6.7-7.71" fill="#A8A8A8"></path>
                                                                                    </svg></span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="ip l fr">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi" aria-label="Share on linkedin"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <path d="M19.75 5.39v13.22a1.14 1.14 0 0 1-1.14 1.14H5.39a1.14 1.14 0 0 1-1.14-1.14V5.39a1.14 1.14 0 0 1 1.14-1.14h13.22a1.14 1.14 0 0 1 1.14 1.14zM8.81 10.18H6.53v7.3H8.8v-7.3zM9 7.67a1.31 1.31 0 0 0-1.3-1.32h-.04a1.32 1.32 0 0 0 0 2.64A1.31 1.31 0 0 0 9 7.71v-.04zm8.46 5.37c0-2.2-1.4-3.05-2.78-3.05a2.6 2.6 0 0 0-2.3 1.18h-.07v-1h-2.14v7.3h2.28V13.6a1.51 1.51 0 0 1 1.36-1.63h.09c.72 0 1.26.45 1.26 1.6v3.91h2.28l.02-4.43z" fill="#A8A8A8"></path>
                                                                                    </svg></span></button></div>
                                                                    </div>
                                                                </div>
                                                                <div class="l fr">
                                                                    <div>
                                                                        <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi"><span class="ci hz dw ia"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57 14.67c0-.57.13-1.11.38-1.6l.02-.02v-.02l.02-.02c0-.02 0-.02.02-.02.12-.26.3-.52.57-.8L7.78 9v-.02l.01-.02c.44-.41.91-.7 1.44-.85a4.87 4.87 0 0 0-1.19 2.36A5.04 5.04 0 0 0 8 11.6L6.04 13.6c-.19.19-.32.4-.38.65a2 2 0 0 0 0 .9c.08.2.2.4.38.57l1.29 1.31c.27.28.62.42 1.03.42.42 0 .78-.14 1.06-.42l1.23-1.25.79-.78 1.15-1.16c.08-.09.19-.22.28-.4.1-.2.15-.42.15-.67 0-.16-.02-.3-.06-.45l-.02-.02v-.02l-.07-.14s0-.03-.04-.06l-.06-.13-.02-.02c0-.02 0-.03-.02-.05a.6.6 0 0 0-.14-.16l-.48-.5c0-.04.02-.1.04-.15l.06-.12 1.17-1.14.09-.09.56.57c.02.04.08.1.16.18l.05.04.03.06.04.05.03.04.04.06.1.14.02.02c0 .02.01.03.03.04l.1.2v.02c.1.16.2.38.3.68a1 1 0 0 1 .04.25 3.2 3.2 0 0 1 .02 1.33 3.49 3.49 0 0 1-.95 1.87l-.66.67-.97.97-1.56 1.57a3.4 3.4 0 0 1-2.47 1.02c-.97 0-1.8-.34-2.49-1.03l-1.3-1.3a3.55 3.55 0 0 1-1-2.51v-.01h-.02v.02zm5.39-3.43c0-.19.02-.4.07-.63.13-.74.44-1.37.95-1.87l.66-.67.97-.98 1.56-1.56c.68-.69 1.5-1.03 2.47-1.03.97 0 1.8.34 2.48 1.02l1.3 1.32a3.48 3.48 0 0 1 1 2.48c0 .58-.11 1.11-.37 1.6l-.02.02v.02l-.02.04c-.14.27-.35.54-.6.8L16.23 15l-.01.02-.01.02c-.44.42-.92.7-1.43.83a4.55 4.55 0 0 0 1.23-3.52L18 10.38c.18-.21.3-.42.35-.65a2.03 2.03 0 0 0-.01-.9 1.96 1.96 0 0 0-.36-.58l-1.3-1.3a1.49 1.49 0 0 0-1.06-.42c-.42 0-.77.14-1.06.4l-1.2 1.27-.8.8-1.16 1.15c-.08.08-.18.21-.29.4a1.66 1.66 0 0 0-.08 1.12l.02.03v.02l.06.14s.01.03.05.06l.06.13.02.02.01.02.01.02c.05.08.1.13.14.16l.47.5c0 .04-.02.09-.04.15l-.06.12-1.15 1.15-.1.08-.56-.56a2.3 2.3 0 0 0-.18-.19c-.02-.01-.02-.03-.02-.04l-.02-.02a.37.37 0 0 1-.1-.12c-.03-.03-.05-.04-.05-.06l-.1-.15-.02-.02-.02-.04-.08-.17v-.02a5.1 5.1 0 0 1-.28-.69 1.03 1.03 0 0 1-.04-.26c-.06-.23-.1-.46-.1-.7v.01z" fill="#A8A8A8"></path>
                                                                                    </svg></span></button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </header><span class="l"></span>
                                                        <section>
                                                            <div>
                                                                <div class="fo as iv iw ix iy"></div>
                                                                <div class="iz ja jb jc jd">
                                                                    <div class="">
                                                                        <h1 id="20e9" class="pw-post-title je jf jg bm jh ji jj jk jl jm jn jo jp jq jr js jt ju jv jw jx jy jz ka kb kc ga">How to implement datatables in laravel</h1>
                                                                    </div>
                                                                    <p id="4ed0" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for table extender, it provides the functionalities like search, sort, pagination on a table of information to handle the data more effectively. Earlier we implemented <a class="au lb" href="http://justlaravel.com/search-functionality-laravel/" rel="noopener ugc nofollow" target="_blank">search</a>, <a class="au lb" href="http://justlaravel.com/using-pagination-laravel/" rel="noopener ugc nofollow" target="_blank">pagination</a>, <a class="au lb" href="http://justlaravel.com/paginated-data-search-laravel/" rel="noopener ugc nofollow" target="_blank">pagination on search results</a> individually without using any plugins, here we will do it using datatables plugin.</p>
                                                                    <p id="2ee0" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">There are also a similar table extender plugins like datatables and <a class="au lb" href="http://justlaravel.com/using-bootgrid-plugin-laravel/" rel="noopener ugc nofollow" target="_blank">bootgrid </a>is one of them, a post on implementing <a class="au lb" href="http://justlaravel.com/demos/using-bootgrid-plugin-laravel/" rel="noopener ugc nofollow" target="_blank">bootgrid </a>is also available <a class="au lb" href="http://justlaravel.com/using-bootgrid-plugin-laravel/" rel="noopener ugc nofollow" target="_blank">here</a>.</p>
                                                                    <p id="b5d9" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Here we used the basic initialisation of datatables, i made another post on implementing <a class="au lb" href="http://justlaravel.com/implement-datatables-server-side-laravel/" rel="noopener ugc nofollow" target="_blank">datatables server side</a>, i recommend you to have a look at it <a class="au lb" href="http://justlaravel.com/implement-datatables-server-side-laravel/" rel="noopener ugc nofollow" target="_blank">here</a>.</p>
                                                                    <h1 id="8a6f" class="lc ld jg bm le lf lg lh li lj lk ll lm ln lo lp lq lr ls lt lu lv lw lx ly lz ga">Step 1 : Initializing datatables</h1>
                                                                    <p id="150c" class="pw-post-body-paragraph kd ke jg kf b kg ma ki kj kk mb km kn ko mc kq kr ks md ku kv kw me ky kz la iz ga">Lets include the required bootstrap, datatables js and css files along with jquery,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="1a62" class="ga ml ld jg mm b dm mn mo l mp">&lt;script src=&quot;//code.jquery.com/jquery-1.12.3.js&quot;&gt;&lt;/script&gt;<br/>&lt;script src=&quot;//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js&quot;&gt;&lt;/script&gt;<br/>&lt;script<br/>    src=&quot;https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js&quot;&gt;&lt;/script&gt;<br/>&lt;link rel=&quot;stylesheet&quot;<br/>    href=&quot;//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css&quot;&gt;<br/>&lt;link rel=&quot;stylesheet&quot;<br/>    href=&quot;https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css&quot;&gt;</span></pre>
                                                                    <p id="393a" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">We show the data in a table so lets create the table we require,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="7f97" class="ga ml ld jg mm b dm mn mo l mp">&lt;table class=&quot;table&quot; id=&quot;table&quot;&gt;<br/>    &lt;thead&gt;<br/>        &lt;tr&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;#&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;First Name&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Last Name&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Email&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Gender&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Country&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Salary ($)&lt;/th&gt;<br/>            &lt;th class=&quot;text-center&quot;&gt;Actions&lt;/th&gt;<br/>        &lt;/tr&gt;<br/>    &lt;/thead&gt;<br/>    &lt;tbody&gt;<br/>        &lt;tr&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>            &lt;td&gt;&lt;/td&gt;<br/>        &lt;/tr&gt;<br/>    &lt;/tbody&gt;<br/>&lt;/table&gt;</span></pre>
                                                                    <p id="1859" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Note that the table above has an id <code class="fp mq mr ms mm b">id=&quot;table&quot;</code> we use that id to initiate datatables,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="bd77" class="ga ml ld jg mm b dm mn mo l mp">&lt;script&gt;<br/>  $(document).ready(function() {<br/>    $(&#x27;#table&#x27;).DataTable();<br/>} );<br/> &lt;/script&gt;</span></pre>
                                                                    <h1 id="8753" class="lc ld jg bm le lf lg lh li lj lk ll lm ln lo lp lq lr ls lt lu lv lw lx ly lz ga">Step 2 : Fetching data from database</h1>
                                                                    <p id="fff0" class="pw-post-body-paragraph kd ke jg kf b kg ma ki kj kk mb km kn ko mc kq kr ks md ku kv kw me ky kz la iz ga">We collect some fake data from mockaroo.com and store it in our database, the table consists of id, first_name, last_name, email, gender, country and salary fields. The sql file can be found here.</p>
                                                                    <p id="4bb9" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Now we set up the database connection details in /.env file or in /config/database.php with appropriate details. for reference post on database set up look <a class="au lb" href="http://justlaravel.com/laravel-database-setup/" rel="noopener ugc nofollow" target="_blank">here</a>.</p>
                                                                    <p id="336c" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Now we create a model file for accessing the data in the database, running the following command will create a model file with the given name at /app/Data.php.</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="e690" class="ga ml ld jg mm b dm mn mo l mp">php artisan make:model Data</span></pre>
                                                                    <p id="a728" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">place the following code in it,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="87a6" class="ga ml ld jg mm b dm mn mo l mp">&lt;?php</span><span id="875d" class="ga ml ld jg mm b dm mt mu mv mw mx mo l mp">namespace App;</span><span id="14e8" class="ga ml ld jg mm b dm mt mu mv mw mx mo l mp">use Illuminate\Database\Eloquent\Model;</span><span id="24b7" class="ga ml ld jg mm b dm mt mu mv mw mx mo l mp">class Data extends Model<br/>{<br/>    protected $table=&quot;datatables_data&quot;;<br/>}</span></pre>
                                                                    <p id="e0fa" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">now our model is ready, we can now fetch the data from it and pass that data to the view created above,</p>
                                                                    <p id="1e0d" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">So in routes/web.php file, place the following code to fetch all the data from the table,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="565b" class="ga ml ld jg mm b dm mn mo l mp">Route::get ( &#x27;/&#x27;, function () {<br/>    $data = Data::all ();<br/>    return view ( &#x27;welcome&#x27; )-&gt;withData ( $data );<br/>} );</span></pre>
                                                                    <h2 id="bb17" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Step 3 : Showing the data</h2>
                                                                    <p id="ae1e" class="pw-post-body-paragraph kd ke jg kf b kg ma ki kj kk mb km kn ko mc kq kr ks md ku kv kw me ky kz la iz ga">In the previous step we pass a variable <code class="fp mq mr ms mm b">$data</code> to the view, it contains all the data we needed, so the view file where we created a table, we show this data in those <code class="fp mq mr ms mm b">&lt;td&gt;</code> elements.</p>
                                                                    <p id="7617" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">edit the view file as follows,</p>
                                                                    <!-- <pre class="mf mg mh mi gx mj bs mk"><span id="9d8f" class="ga ml ld jg mm b dm mn mo l mp">&lt;tbody&gt;<br/>@foreach($data as $item)<br/>&lt;tr class=&quot;item{{$item-&gt;id}}&quot;&gt;<br/>    &lt;td&gt;{{$item-&gt;id}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;first_name}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;last_name}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;email}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;gender}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;country}}&lt;/td&gt;<br/>    &lt;td&gt;{{$item-&gt;salary}}&lt;/td&gt;<br/>    &lt;td&gt;&lt;button class=&quot;edit-modal btn btn-info&quot;<br/>            data-info=&quot;{{$item-&gt;id}},{{$item-&gt;first_name}},{{$item-&gt;last_name}},{{$item-&gt;email}},{{$item-&gt;gender}},{{$item-&gt;country}},{{$item-&gt;salary}}&quot;&gt;<br/>            &lt;span class=&quot;glyphicon glyphicon-edit&quot;&gt;&lt;/span&gt; Edit<br/>        &lt;/button&gt;<br/>        &lt;button class=&quot;delete-modal btn btn-danger&quot;<br/>            data-info=&quot;{{$item-&gt;id}},{{$item-&gt;first_name}},{{$item-&gt;last_name}},{{$item-&gt;email}},{{$item-&gt;gender}},{{$item-&gt;country}},{{$item-&gt;salary}}&quot;&gt;<br/>            &lt;span class=&quot;glyphicon glyphicon-trash&quot;&gt;&lt;/span&gt; Delete<br/>        &lt;/button&gt;&lt;/td&gt;<br/>&lt;/tr&gt;<br/>@endforeach<br/>&lt;/tbody&gt;</span></pre> -->
                                                                    <p id="c358" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">We looped the <code class="fp mq mr ms mm b">$data</code> variable and displayed all the results in the table.</p>
                                                                    <figure class="mf mg mh mi gx nm gl gm paragraph-image">
                                                                        <div role="button" tabindex="0" class="nn no do np ce nq">
                                                                            <div class="gl gm nl">
                                                                                <div class="m l do fp">
                                                                                    <div class="nr ns l"><img alt="Datatables implementation in laravel - justlaravel.com" class="ce nt nu" src="https://miro.medium.com/max/1400/0*jHRjgulo5b4m2WJK.png" srcSet="https://miro.medium.com/max/300/0*jHRjgulo5b4m2WJK.png 300w" sizes="" loading="lazy" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="nv bl gn gl gm nw nx bm b bn bo cn">Datatables implementation in laravel — justlaravel.com</figcaption>
                                                                    </figure>
                                                                    <h2 id="5bbf" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Step 4 : Deleting and Editing (the laravel part)</h2>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="cb7e" class="ga ml ld jg mm b dm mn mo l mp">As we see in the table the last column ‘Actions’ with edit and delete options..<br/>We have two buttons for edit and delete, when clicked on those a modal will pop up showing the details and asking us to edit and delete the details in that row.</span><span id="f43e" class="ga ml ld jg mm b dm mt mu mv mw mx mo l mp">We use only one modal for editing and deleting purpose, as we did in <a class="au lb" href="http://justlaravel.com/ajax-crud-operations-laravel/" rel="noopener ugc nofollow" target="_blank">previous tutorial</a> about <a class="au lb" href="http://justlaravel.com/ajax-crud-operations-laravel/" rel="noopener ugc nofollow" target="_blank">ajax crud operations</a>, almost the same code we use here too, but with some extra fields in the edit modal form.</span></pre>
                                                                    <h2 id="d822" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Step 4.1 : Edit Modal</h2>
                                                                    <p id="717d" class="pw-post-body-paragraph kd ke jg kf b kg ma ki kj kk mb km kn ko mc kq kr ks md ku kv kw me ky kz la iz ga">So when edit button in action column is clicked, we will adjust the only modal with appropriate buttons and actions like name of the button in the modal, content in the modal.</p>
                                                                    <p id="8afb" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">following is the code executed when edit button is clicked,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="50b2" class="ga ml ld jg mm b dm mn mo l mp">$(document).on(&#x27;click&#x27;, &#x27;.edit-modal&#x27;, function() {<br/>        $(&#x27;#footer_action_button&#x27;).text(&quot; Update&quot;);<br/>        $(&#x27;#footer_action_button&#x27;).addClass(&#x27;glyphicon-check&#x27;);<br/>        $(&#x27;#footer_action_button&#x27;).removeClass(&#x27;glyphicon-trash&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).addClass(&#x27;btn-success&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).removeClass(&#x27;btn-danger&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).removeClass(&#x27;delete&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).addClass(&#x27;edit&#x27;);<br/>        $(&#x27;.modal-title&#x27;).text(&#x27;Edit&#x27;);<br/>        $(&#x27;.deleteContent&#x27;).hide();<br/>        $(&#x27;.form-horizontal&#x27;).show();<br/>        var stuff = $(this).data(&#x27;info&#x27;).split(&#x27;,&#x27;);<br/>        fillmodalData(stuff)<br/>        $(&#x27;#myModal&#x27;).modal(&#x27;show&#x27;);<br/>    });</span></pre>
                                                                    <p id="0d9e" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Here we used a function <code class="fp mq mr ms mm b">fillmodalData()</code> function to get the details of that particular row, the button&#x27;s data attribute contains all the info about that row so we use this inf and set them in the modal,</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="f776" class="ga ml ld jg mm b dm mn mo l mp">function fillmodalData(details){<br/>    $(&#x27;#fid&#x27;).val(details[0]);<br/>    $(&#x27;#fname&#x27;).val(details[1]);<br/>    $(&#x27;#lname&#x27;).val(details[2]);<br/>    $(&#x27;#email&#x27;).val(details[3]);<br/>    $(&#x27;#gender&#x27;).val(details[4]);<br/>    $(&#x27;#country&#x27;).val(details[5]);<br/>    $(&#x27;#salary&#x27;).val(details[6]);<br/>}</span></pre>
                                                                    <p id="8030" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">After the modal is shown, we can edit the data, then the data is saved after passing all the validation rules.</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="9311" class="ga ml ld jg mm b dm mn mo l mp">$(&#x27;.modal-footer&#x27;).on(&#x27;click&#x27;, &#x27;.edit&#x27;, function() {<br/>        $.ajax({<br/>            type: &#x27;post&#x27;,<br/>            url: &#x27;/editItem&#x27;,<br/>            data: {<br/>                &#x27;_token&#x27;: $(&#x27;input[name=_token]&#x27;).val(),<br/>                &#x27;id&#x27;: $(&quot;#fid&quot;).val(),<br/>                &#x27;fname&#x27;: $(&#x27;#fname&#x27;).val(),<br/>                &#x27;lname&#x27;: $(&#x27;#lname&#x27;).val(),<br/>                &#x27;email&#x27;: $(&#x27;#email&#x27;).val(),<br/>                &#x27;gender&#x27;: $(&#x27;#gender&#x27;).val(),<br/>                &#x27;country&#x27;: $(&#x27;#country&#x27;).val(),<br/>                &#x27;salary&#x27;: $(&#x27;#salary&#x27;).val()<br/>            },<br/>            success: function(data) {<br/>                if (data.errors){<br/>                    $(&#x27;#myModal&#x27;).modal(&#x27;show&#x27;);<br/>                    if(data.errors.fname) {<br/>                        $(&#x27;.fname_error&#x27;).removeClass(&#x27;hidden&#x27;);<br/>                        $(&#x27;.fname_error&#x27;).text(&quot;First name can&#x27;t be empty !&quot;);<br/>                    }<br/>                    if(data.errors.lname) {<br/>                        $(&#x27;.lname_error&#x27;).removeClass(&#x27;hidden&#x27;);<br/>                        $(&#x27;.lname_error&#x27;).text(&quot;Last name can&#x27;t be empty !&quot;);<br/>                    }<br/>                    if(data.errors.email) {<br/>                        $(&#x27;.email_error&#x27;).removeClass(&#x27;hidden&#x27;);<br/>                        $(&#x27;.email_error&#x27;).text(&quot;Email must be a valid one !&quot;);<br/>                    }<br/>                    if(data.errors.country) {<br/>                        $(&#x27;.country_error&#x27;).removeClass(&#x27;hidden&#x27;);<br/>                        $(&#x27;.country_error&#x27;).text(&quot;Country must be a valid one !&quot;);<br/>                    }<br/>                    if(data.errors.salary) {<br/>                        $(&#x27;.salary_error&#x27;).removeClass(&#x27;hidden&#x27;);<br/>                        $(&#x27;.salary_error&#x27;).text(&quot;Salary must be a valid format ! (ex: #.##)&quot;);<br/>                    }<br/>                }<br/>                 else {<br/>                     <br/>                     $(&#x27;.error&#x27;).addClass(&#x27;hidden&#x27;);<br/>                $(&#x27;.item&#x27; + data.id).replaceWith(&quot;&lt;tr class=&#x27;item&quot; + data.id + &quot;&#x27;&gt;&lt;td&gt;&quot; +<br/>                        data.id + &quot;&lt;/td&gt;&lt;td&gt;&quot; + data.first_name +<br/>                        &quot;&lt;/td&gt;&lt;td&gt;&quot; + data.last_name + &quot;&lt;/td&gt;&lt;td&gt;&quot; + data.email + &quot;&lt;/td&gt;&lt;td&gt;&quot; +<br/>                         data.gender + &quot;&lt;/td&gt;&lt;td&gt;&quot; + data.country + &quot;&lt;/td&gt;&lt;td&gt;&quot; + data.salary +<br/>                          &quot;&lt;/td&gt;&lt;td&gt;&lt;button class=&#x27;edit-modal btn btn-info&#x27; data-info=&#x27;&quot; + data.id+&quot;,&quot;+data.first_name+&quot;,&quot;+data.last_name+&quot;,&quot;+data.email+&quot;,&quot;+data.gender+&quot;,&quot;+data.country+&quot;,&quot;+data.salary+&quot;&#x27;&gt;&lt;span class=&#x27;glyphicon glyphicon-edit&#x27;&gt;&lt;/span&gt; Edit&lt;/button&gt; &lt;button class=&#x27;delete-modal btn btn-danger&#x27; data-info=&#x27;&quot; + data.id+&quot;,&quot;+data.first_name+&quot;,&quot;+data.last_name+&quot;,&quot;+data.email+&quot;,&quot;+data.gender+&quot;,&quot;+data.country+&quot;,&quot;+data.salary+&quot;&#x27; &gt;&lt;span class=&#x27;glyphicon glyphicon-trash&#x27;&gt;&lt;/span&gt; Delete&lt;/button&gt;&lt;/td&gt;&lt;/tr&gt;&quot;);</span><span id="2cb6" class="ga ml ld jg mm b dm mt mu mv mw mx mo l mp">}}<br/>        });<br/>    });</span></pre>
                                                                    <figure class="mf mg mh mi gx nm gl gm paragraph-image">
                                                                        <div class="gl gm ny">
                                                                            <div class="m l do fp">
                                                                                <div class="nz ns l"><img alt="Datatables implementation in laravel - justlaravel.com" class="ce nt nu" src="https://miro.medium.com/max/1338/0*lFj--MhHLwv4-IVg.png" srcSet="https://miro.medium.com/max/300/0*lFj--MhHLwv4-IVg.png 300w" sizes="" loading="lazy" /></div>
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="nv bl gn gl gm nw nx bm b bn bo cn">Datatables implementation in laravel — justlaravel.com</figcaption>
                                                                    </figure>
                                                                    <p id="6797" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Basically when update button is clicked, it is routed to ajax call <code class="fp mq mr ms mm b">/editdata</code>, it checks for validations, throws errors if validator fails or it saves the data in database. So in the success function of the ajax call first check for errors, if any we display them appropriately or replace the row with new data.</p>
                                                                    <h2 id="f2aa" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Edit action :</h2>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="30ae" class="ga ml ld jg mm b dm mn mo l mp">Route::post ( &#x27;/editItem&#x27;, function (Request $request) {<br/>    <br/>    $rules = array (<br/>            &#x27;fname&#x27; =&gt; &#x27;required|alpha&#x27;,<br/>            &#x27;lname&#x27; =&gt; &#x27;required|alpha&#x27;,<br/>            &#x27;email&#x27; =&gt; &#x27;required|email&#x27;,<br/>            &#x27;gender&#x27; =&gt; &#x27;required&#x27;,<br/>            &#x27;country&#x27; =&gt; &#x27;required|regex:/^[\pL\s\-]+$/u&#x27;,<br/>            &#x27;salary&#x27; =&gt; &#x27;required|regex:/^\d*(\.\d{2})?$/&#x27; <br/>    );<br/>    $validator = Validator::make ( Input::all (), $rules );<br/>    if ($validator-&gt;fails ())<br/>        return Response::json ( array (             <br/>                &#x27;errors&#x27; =&gt; $validator-&gt;getMessageBag ()-&gt;toArray () <br/>        ) );<br/>    else {<br/>        <br/>        $data = Data::find ( $request-&gt;id );<br/>        $data-&gt;first_name = ($request-&gt;fname);<br/>        $data-&gt;last_name = ($request-&gt;lname);<br/>        $data-&gt;email = ($request-&gt;email);<br/>        $data-&gt;gender = ($request-&gt;gender);<br/>        $data-&gt;country = ($request-&gt;country);<br/>        $data-&gt;salary = ($request-&gt;salary);<br/>        $data-&gt;save ();<br/>        return response ()-&gt;json ( $data );<br/>    }<br/>} );</span></pre>
                                                                    <figure class="mf mg mh mi gx nm gl gm paragraph-image">
                                                                        <div class="gl gm oa">
                                                                            <div class="m l do fp">
                                                                                <div class="ob ns l"><img alt="Datatables implementation in laravel - justlaravel.com" class="ce nt nu" src="https://miro.medium.com/max/1278/0*gNFvrC9roJE32S1p.png" srcSet="https://miro.medium.com/max/300/0*gNFvrC9roJE32S1p.png 300w" sizes="" loading="lazy" /></div>
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="nv bl gn gl gm nw nx bm b bn bo cn">Datatables implementation in laravel — justlaravel.com</figcaption>
                                                                    </figure>
                                                                    <figure class="mf mg mh mi gx nm gl gm paragraph-image">
                                                                        <div class="gl gm oc">
                                                                            <div class="m l do fp">
                                                                                <div class="od ns l"><img alt="Datatables implementation in laravel - justlaravel.com" class="ce nt nu" src="https://miro.medium.com/max/1276/0*ud5kZloy7l8i-bPS.png" srcSet="https://miro.medium.com/max/300/0*ud5kZloy7l8i-bPS.png 300w" sizes="" loading="lazy" /></div>
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="nv bl gn gl gm nw nx bm b bn bo cn">Datatables implementation in laravel — justlaravel.com</figcaption>
                                                                    </figure>
                                                                    <h2 id="9aed" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Step 4.2 : Delete Modal</h2>
                                                                    <p id="079d" class="pw-post-body-paragraph kd ke jg kf b kg ma ki kj kk mb km kn ko mc kq kr ks md ku kv kw me ky kz la iz ga">When delete button in actions column is clicked a modal pops up, asking for delete conformation.</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="0202" class="ga ml ld jg mm b dm mn mo l mp">$(document).on(&#x27;click&#x27;, &#x27;.delete-modal&#x27;, function() {<br/>        $(&#x27;#footer_action_button&#x27;).text(&quot; Delete&quot;);<br/>        $(&#x27;#footer_action_button&#x27;).removeClass(&#x27;glyphicon-check&#x27;);<br/>        $(&#x27;#footer_action_button&#x27;).addClass(&#x27;glyphicon-trash&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).removeClass(&#x27;btn-success&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).addClass(&#x27;btn-danger&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).removeClass(&#x27;edit&#x27;);<br/>        $(&#x27;.actionBtn&#x27;).addClass(&#x27;delete&#x27;);<br/>        $(&#x27;.modal-title&#x27;).text(&#x27;Delete&#x27;);<br/>        $(&#x27;.deleteContent&#x27;).show();<br/>        $(&#x27;.form-horizontal&#x27;).hide();<br/>        var stuff = $(this).data(&#x27;info&#x27;).split(&#x27;,&#x27;);<br/>        $(&#x27;.did&#x27;).text(stuff[0]);<br/>        $(&#x27;.dname&#x27;).html(stuff[1] +&quot; &quot;+stuff[2]);<br/>        $(&#x27;#myModal&#x27;).modal(&#x27;show&#x27;);<br/>    });</span></pre>
                                                                    <p id="0e0b" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">When delete is clicked in the modal it is routed to ajax call <code class="fp mq mr ms mm b">/deleteData</code>, which deletes the data from the database and updates the view.</p>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="8130" class="ga ml ld jg mm b dm mn mo l mp">$(&#x27;.modal-footer&#x27;).on(&#x27;click&#x27;, &#x27;.delete&#x27;, function() {<br/>        $.ajax({<br/>            type: &#x27;post&#x27;,<br/>            url: &#x27;/deleteItem&#x27;,<br/>            data: {<br/>                &#x27;_token&#x27;: $(&#x27;input[name=_token]&#x27;).val(),<br/>                &#x27;id&#x27;: $(&#x27;.did&#x27;).text()<br/>            },<br/>            success: function(data) {<br/>                $(&#x27;.item&#x27; + $(&#x27;.did&#x27;).text()).remove();<br/>            }<br/>        });<br/>    });</span></pre>
                                                                    <h2 id="cf64" class="ml ld jg bm le my mz na li nb nc nd lm ko ne nf lq ks ng nh lu kw ni nj ly nk ga">Delete action :</h2>
                                                                    <pre class="mf mg mh mi gx mj bs mk"><span id="c5b3" class="ga ml ld jg mm b dm mn mo l mp">Route::post ( &#x27;/deleteItem&#x27;, function (Request $request) {<br/>    Data::find ( $request-&gt;id )-&gt;delete ();<br/>    return response ()-&gt;json ();<br/>} );</span></pre>
                                                                    <figure class="mf mg mh mi gx nm gl gm paragraph-image">
                                                                        <div class="gl gm oe">
                                                                            <div class="m l do fp">
                                                                                <div class="of ns l"><img alt="Datatables implementation in laravel - justlaravel.com" class="ce nt nu" src="https://miro.medium.com/max/1266/0*BXHz4Y0qKTb4_GnK.png" srcSet="https://miro.medium.com/max/300/0*BXHz4Y0qKTb4_GnK.png 300w" sizes="" loading="lazy" /></div>
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="nv bl gn gl gm nw nx bm b bn bo cn">Datatables implementation in laravel — justlaravel.com</figcaption>
                                                                    </figure>
                                                                    <p id="b6cd" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga"><em class="og">Server side implementation of datatables</em> : <br />http://justlaravel.com/implement-datatables-server-side-laravel/</p>
                                                                </div>
                                                                <div class="o dx oh oi ii oj" role="separator"><span class="ok fl ci ol om on"></span><span class="ok fl ci ol om on"></span><span class="ok fl ci ol om"></span></div>
                                                                <div class="iz ja jb jc jd">
                                                                    <p id="f761" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Post: <a class="au lb" href="http://justlaravel.com/how-to-implement-datatables-in-laravel/" rel="noopener ugc nofollow" target="_blank">http://justlaravel.com/how-to-implement-datatables-in-laravel/</a></p>
                                                                    <div class="oo op gt gv oq or"><a href="http://justlaravel.com/how-to-implement-datatables-in-laravel/" rel="noopener  ugc nofollow" target="_blank">
                                                                            <div class="os o fr">
                                                                                <div class="ot o da dx en ou">
                                                                                    <h2 class="bm jh dm bo fs ov fu fv ow fx fz jf ga">How to implement datatables in laravel - Just Laravel</h2>
                                                                                    <div class="ox l">
                                                                                        <h3 class="bm b dm bo fs ov fu fv ow fx fz cn">Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is…</h3>
                                                                                    </div>
                                                                                    <div class="oy l">
                                                                                        <p class="bm b hi bo fs ov fu fv ow fx fz cn">justlaravel.com</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="oz l">
                                                                                    <div class="pa l pb pc pd oz pe nt or"></div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <p id="0b34" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">YouTube: <a class="au lb" href="https://www.youtube.com/watch?v=UJuqiUWGHus" rel="noopener ugc nofollow" target="_blank">https://www.youtube.com/watch?v=UJuqiUWGHus</a></p>
                                                                    <figure class="mf mg mh mi gx nm">
                                                                        <div class="m l do">
                                                                            <div class="pf ns l"></div>
                                                                        </div>
                                                                    </figure>
                                                                    <p id="2093" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">GitHub: <a class="au lb" href="https://github.com/avinashn/datatables-implementation-laravel" rel="noopener ugc nofollow" target="_blank">https://github.com/avinashn/datatables-implementation-laravel</a></p>
                                                                    <div class="oo op gt gv oq or"><a href="https://github.com/avinashn/datatables-implementation-laravel" rel="noopener  ugc nofollow" target="_blank">
                                                                            <div class="os o fr">
                                                                                <div class="ot o da dx en ou">
                                                                                    <h2 class="bm jh dm bo fs ov fu fv ow fx fz jf ga">avinashn/datatables-implementation-laravel</h2>
                                                                                    <div class="ox l">
                                                                                        <h3 class="bm b dm bo fs ov fu fv ow fx fz cn">datatables-implementation-laravel - An example of integrating jQuery datatables plugin in laravel.</h3>
                                                                                    </div>
                                                                                    <div class="oy l">
                                                                                        <p class="bm b hi bo fs ov fu fv ow fx fz cn">github.com</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="oz l">
                                                                                    <div class="pg l pb pc pd oz pe nt or"></div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                    <p id="8245" class="pw-post-body-paragraph kd ke jg kf b kg kh ki kj kk kl km kn ko kp kq kr ks kt ku kv kw kx ky kz la iz ga">Working Demo: <a class="au lb" href="http://demos.justlaravel.com/how-to-implement-datatables-in-laravel/" rel="noopener ugc nofollow" target="_blank">http://demos.justlaravel.com/how-to-implement-datatables-in-laravel/</a></p>
                                                                    <div class="oo op gt gv oq or"><a href="http://demos.justlaravel.com/how-to-implement-datatables-in-laravel/" rel="noopener  ugc nofollow" target="_blank">
                                                                            <div class="os o fr">
                                                                                <div class="ot o da dx en ou">
                                                                                    <h2 class="bm jh dm bo fs ov fu fv ow fx fz jf ga">Datatables implementation in laravel - justlaravel.com</h2>
                                                                                    <div class="ox l">
                                                                                        <h3 class="bm b dm bo fs ov fu fv ow fx fz cn">This is a live demo of the application implementing datatables plugin in laravel which is described in this post. how…</h3>
                                                                                    </div>
                                                                                    <div class="oy l">
                                                                                        <p class="bm b hi bo fs ov fu fv ow fx fz cn">demos.justlaravel.com</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </article>
                                            <div class="ph o"></div>
                                        </div>
                                    </div>
                                    <div class="l"></div>
                                    <footer class="pi pj pk pl o ao pm pn c">
                                        <div class="l po">
                                            <div class="o dx">
                                                <div class="em ce fa fb fc fd fe ff fg fh fi">
                                                    <div class="o u pp">
                                                        <div class="o ao hc">
                                                            <div class="pq l"><span class="l he pr ps e d">
                                                                    <div class="o ao hc">
                                                                        <div class="pw-multi-vote-icon do pt pu pv pw"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=https%3A%2F%2Fmedium.com%2F_%2Fvote%2Fjustlaravel%2Fde200c8d4467&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;user=Avinash+Nethala&amp;userId=2abbbee3a59&amp;source=-----de200c8d4467---------------------clap_footer-----------">
                                                                                    <div class="dr id de px py pz bb qa qb qc pw"><svg width="24" height="24" viewBox="0 0 24 24" aria-label="clap">
                                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.37.83L12 3.28l.63-2.45h-1.26zM13.92 3.95l1.52-2.1-1.18-.4-.34 2.5zM8.59 1.84l1.52 2.11-.34-2.5-1.18.4zM18.52 18.92a4.23 4.23 0 0 1-2.62 1.33l.41-.37c2.39-2.4 2.86-4.95 1.4-7.63l-.91-1.6-.8-1.67c-.25-.56-.19-.98.21-1.29a.7.7 0 0 1 .55-.13c.28.05.54.23.72.5l2.37 4.16c.97 1.62 1.14 4.23-1.33 6.7zm-11-.44l-4.15-4.15a.83.83 0 0 1 1.17-1.17l2.16 2.16a.37.37 0 0 0 .51-.52l-2.15-2.16L3.6 11.2a.83.83 0 0 1 1.17-1.17l3.43 3.44a.36.36 0 0 0 .52 0 .36.36 0 0 0 0-.52L5.29 9.51l-.97-.97a.83.83 0 0 1 0-1.16.84.84 0 0 1 1.17 0l.97.97 3.44 3.43a.36.36 0 0 0 .51 0 .37.37 0 0 0 0-.52L6.98 7.83a.82.82 0 0 1-.18-.9.82.82 0 0 1 .76-.51c.22 0 .43.09.58.24l5.8 5.79a.37.37 0 0 0 .58-.42L13.4 9.67c-.26-.56-.2-.98.2-1.29a.7.7 0 0 1 .55-.13c.28.05.55.23.73.5l2.2 3.86c1.3 2.38.87 4.59-1.29 6.75a4.65 4.65 0 0 1-4.19 1.37 7.73 7.73 0 0 1-4.07-2.25zm3.23-12.5l2.12 2.11c-.41.5-.47 1.17-.13 1.9l.22.46-3.52-3.53a.81.81 0 0 1-.1-.36c0-.23.09-.43.24-.59a.85.85 0 0 1 1.17 0zm7.36 1.7a1.86 1.86 0 0 0-1.23-.84 1.44 1.44 0 0 0-1.12.27c-.3.24-.5.55-.58.89-.25-.25-.57-.4-.91-.47-.28-.04-.56 0-.82.1l-2.18-2.18a1.56 1.56 0 0 0-2.2 0c-.2.2-.33.44-.4.7a1.56 1.56 0 0 0-2.63.75 1.6 1.6 0 0 0-2.23-.04 1.56 1.56 0 0 0 0 2.2c-.24.1-.5.24-.72.45a1.56 1.56 0 0 0 0 2.2l.52.52a1.56 1.56 0 0 0-.75 2.61L7 19a8.46 8.46 0 0 0 4.48 2.45 5.18 5.18 0 0 0 3.36-.5 4.89 4.89 0 0 0 4.2-1.51c2.75-2.77 2.54-5.74 1.43-7.59L18.1 7.68z"></path>
                                                                                        </svg></div>
                                                                                </a></span></div>
                                                                        <div class="pw-multi-vote-count l qd qe qf qg qh qi qj">
                                                                            <p class="bm b hi bo cn"><span class="qk">--</span></p>
                                                                        </div>
                                                                    </div>
                                                                </span><span class="l h g f ql qm">
                                                                    <div class="o ao hc">
                                                                        <div class="pw-multi-vote-icon do pt pu pv pw"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=https%3A%2F%2Fmedium.com%2F_%2Fvote%2Fjustlaravel%2Fde200c8d4467&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;user=Avinash+Nethala&amp;userId=2abbbee3a59&amp;source=-----de200c8d4467---------------------clap_footer-----------">
                                                                                    <div class="dr id de px py pz bb qa qb qc pw"><svg width="24" height="24" viewBox="0 0 24 24" aria-label="clap">
                                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.37.83L12 3.28l.63-2.45h-1.26zM13.92 3.95l1.52-2.1-1.18-.4-.34 2.5zM8.59 1.84l1.52 2.11-.34-2.5-1.18.4zM18.52 18.92a4.23 4.23 0 0 1-2.62 1.33l.41-.37c2.39-2.4 2.86-4.95 1.4-7.63l-.91-1.6-.8-1.67c-.25-.56-.19-.98.21-1.29a.7.7 0 0 1 .55-.13c.28.05.54.23.72.5l2.37 4.16c.97 1.62 1.14 4.23-1.33 6.7zm-11-.44l-4.15-4.15a.83.83 0 0 1 1.17-1.17l2.16 2.16a.37.37 0 0 0 .51-.52l-2.15-2.16L3.6 11.2a.83.83 0 0 1 1.17-1.17l3.43 3.44a.36.36 0 0 0 .52 0 .36.36 0 0 0 0-.52L5.29 9.51l-.97-.97a.83.83 0 0 1 0-1.16.84.84 0 0 1 1.17 0l.97.97 3.44 3.43a.36.36 0 0 0 .51 0 .37.37 0 0 0 0-.52L6.98 7.83a.82.82 0 0 1-.18-.9.82.82 0 0 1 .76-.51c.22 0 .43.09.58.24l5.8 5.79a.37.37 0 0 0 .58-.42L13.4 9.67c-.26-.56-.2-.98.2-1.29a.7.7 0 0 1 .55-.13c.28.05.55.23.73.5l2.2 3.86c1.3 2.38.87 4.59-1.29 6.75a4.65 4.65 0 0 1-4.19 1.37 7.73 7.73 0 0 1-4.07-2.25zm3.23-12.5l2.12 2.11c-.41.5-.47 1.17-.13 1.9l.22.46-3.52-3.53a.81.81 0 0 1-.1-.36c0-.23.09-.43.24-.59a.85.85 0 0 1 1.17 0zm7.36 1.7a1.86 1.86 0 0 0-1.23-.84 1.44 1.44 0 0 0-1.12.27c-.3.24-.5.55-.58.89-.25-.25-.57-.4-.91-.47-.28-.04-.56 0-.82.1l-2.18-2.18a1.56 1.56 0 0 0-2.2 0c-.2.2-.33.44-.4.7a1.56 1.56 0 0 0-2.63.75 1.6 1.6 0 0 0-2.23-.04 1.56 1.56 0 0 0 0 2.2c-.24.1-.5.24-.72.45a1.56 1.56 0 0 0 0 2.2l.52.52a1.56 1.56 0 0 0-.75 2.61L7 19a8.46 8.46 0 0 0 4.48 2.45 5.18 5.18 0 0 0 3.36-.5 4.89 4.89 0 0 0 4.2-1.51c2.75-2.77 2.54-5.74 1.43-7.59L18.1 7.68z"></path>
                                                                                        </svg></div>
                                                                                </a></span></div>
                                                                        <div class="pw-multi-vote-count l qd qe qf qg qh qi qj">
                                                                            <p class="bm b hi bo cn"><span class="qk">--</span></p>
                                                                        </div>
                                                                    </div>
                                                                </span></div>
                                                            <div class="qn o">
                                                                <div>
                                                                    <div class="ci" aria-hidden="false"><button class="id dr qp o ao de py qq" aria-label="responses"><svg width="24" height="24" viewBox="0 0 24 24" aria-label="responses" class="qo">
                                                                                <path d="M18 16.8a7.14 7.14 0 0 0 2.24-5.32c0-4.12-3.53-7.48-8.05-7.48C7.67 4 4 7.36 4 11.48c0 4.13 3.67 7.48 8.2 7.48a8.9 8.9 0 0 0 2.38-.32c.23.2.48.39.75.56 1.06.69 2.2 1.04 3.4 1.04.22 0 .4-.11.48-.29a.5.5 0 0 0-.04-.52 6.4 6.4 0 0 1-1.16-2.65v.02zm-3.12 1.06l-.06-.22-.32.1a8 8 0 0 1-2.3.33c-4.03 0-7.3-2.96-7.3-6.59S8.17 4.9 12.2 4.9c4 0 7.1 2.96 7.1 6.6 0 1.8-.6 3.47-2.02 4.72l-.2.16v.26l.02.3a6.74 6.74 0 0 0 .88 2.4 5.27 5.27 0 0 1-2.17-.86c-.28-.17-.72-.38-.94-.59l.01-.02z"></path>
                                                                            </svg>
                                                                            <p class="bm b bn bo cn"><span class="pw-responses-count qr qo qs">3</span></p>
                                                                        </button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="o ao">
                                                            <div class="ci" aria-hidden="false" aria-describedby="postFooterSocialMenu" aria-labelledby="postFooterSocialMenu">
                                                                <div>
                                                                    <div class="ci" aria-hidden="false"><button class="au av aw ax ay az ba hz bc bd be bf bg bh bi qt ia qu" aria-controls="postFooterSocialMenu" aria-expanded="false" aria-label="Share Post"><svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.22 4.93a.42.42 0 0 1-.12.13h.01a.45.45 0 0 1-.29.08.52.52 0 0 1-.3-.13L12.5 3v7.07a.5.5 0 0 1-.5.5.5.5 0 0 1-.5-.5V3.02l-2 2a.45.45 0 0 1-.57.04h-.02a.4.4 0 0 1-.16-.3.4.4 0 0 1 .1-.32l2.8-2.8a.5.5 0 0 1 .7 0l2.8 2.8a.42.42 0 0 1 .07.5zm-.1.14zm.88 2h1.5a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-11a2 2 0 0 1-2-2v-10a2 2 0 0 1 2-2H8a.5.5 0 0 1 .35.14c.1.1.15.22.15.35a.5.5 0 0 1-.15.35.5.5 0 0 1-.35.15H6.4c-.5 0-.9.4-.9.9v10.2a.9.9 0 0 0 .9.9h11.2c.5 0 .9-.4.9-.9V8.96c0-.5-.4-.9-.9-.9H16a.5.5 0 0 1 0-1z" fill="#000"></path>
                                                                            </svg></button></div>
                                                                </div>
                                                            </div>
                                                            <div class="qv l fr"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=https%3A%2F%2Fmedium.com%2F_%2Fbookmark%2Fp%2Fde200c8d4467&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;source=--------------------------bookmark_footer-----------"><button aria-controls="addToCatalogBookmarkButton" aria-expanded="false" aria-label="Add to list bookmark button" class="au de aw ax ay az ba hz bc id ie if ig"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" class="ic" aria-label="Add to list bookmark button">
                                                                                <path d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z" fill="#292929"></path>
                                                                            </svg></button></a></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                                <div class="o dx">
                                    <div class="em ce fa fb fc fd fe ff fg fh fi"></div>
                                </div>
                                <div class="l">
                                    <div class="l qw pp">
                                        <div class="l pp">
                                            <div class="qx qy l qw">
                                                <div class="o dx">
                                                    <div class="em ce fa fb fc fd fe ff fg fh fi">
                                                        <div class="o ao u">
                                                            <h2 class="bm qz my na ra li nb nd rb lm ko nf rc lq ks nh rd lu kw nj re ly fs fu fv fw fx fy fz ga"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="/justlaravel?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">More from justlaravel</a></h2><span><button class="bm b bn bo hj bq hl hm hn ho hp bd bz hq hr hs cd cf cg ch ci cj">Follow</button></span>
                                                        </div>
                                                        <div class="rf l">
                                                            <p class="bm b bn bo cn">justlaravel.com is website all about laravel where one can find useful tutorials with working demo, source code, video demonstration and more.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rg l">
                                            <div class="rh ri l">
                                                <div class="nt l bl"><a class="bm b bn bo hj bq hl hm hn ho hp bd bz hq hr hs cd cf cg ch ci cj" href="/justlaravel?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">Read more from
                                                        <!-- -->justlaravel
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="o dx">
                                            <div class="em ce fa fb fc fd fe ff fg fh fi">
                                                <div class="rj ri l">
                                                    <section class="pw-more-medium-articles l">
                                                        <div class="rk l">
                                                            <h2 class="bm qz my na ra li nb nd rb lm ko nf rc lq ks nh rd lu kw nj re ly fs fu fv fw fx fy fz ga">Recommended from Medium</h2>
                                                        </div>
                                                        <div class="gy o hc ht rl rm rn ro rp rq rr rs rt ru rv rw rx ry rz">
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@metaseptiana2?source=post_internal_links---------0----------------------------">
                                                                                                <div class="l do"><img alt="Meta Septiana S" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*6F2n4vDuOTIRn5eY5vxy1w.jpeg" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@metaseptiana2?source=post_internal_links---------0----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Meta Septiana S</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@metaseptiana2/how-to-make-a-good-test-case-cd07e431a8b?source=post_internal_links---------0----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>HOW TO MAKE A GOOD TEST CASE</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@metaseptiana2/how-to-make-a-good-test-case-cd07e431a8b?source=post_internal_links---------0----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*-Jpo9T2q4qj6deFUbSHcag.png" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@eyvazahmadzada?source=post_internal_links---------1----------------------------">
                                                                                                <div class="l do"><img alt="Eyvaz Ahmadzada" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*sm6TwPq7zU09Ai9Dxyi91w@2x.jpeg" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@eyvazahmadzada?source=post_internal_links---------1----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Eyvaz Ahmadzada</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@eyvazahmadzada/my-gsoc-journey-week-3-414cc5a90d27?source=post_internal_links---------1----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>My GSoC Journey: Week 3</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@eyvazahmadzada/my-gsoc-journey-week-3-414cc5a90d27?source=post_internal_links---------1----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*M0_44H1c2GG4uAz9WkRL1g.png" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@nithin_rajan?source=post_internal_links---------2----------------------------">
                                                                                                <div class="l do"><img alt="Nithin Rajan" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*zw7UIw4L5IaairamRvM73Q.jpeg" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@nithin_rajan?source=post_internal_links---------2----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Nithin Rajan</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@nithin_rajan/web-scrapping-amazon-big-basket-flip-kart-dmart-253d2f1150e3?source=post_internal_links---------2----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>Web Scrapping — Amazon, Big Basket, Flip Kart, Dmart</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@nithin_rajan/web-scrapping-amazon-big-basket-flip-kart-dmart-253d2f1150e3?source=post_internal_links---------2----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="png" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*m6rDSK-R3yjcFOJel8ZAFQ.png" width="56" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@hackernoontech?source=post_internal_links---------3----------------------------">
                                                                                                <div class="l do"><img alt="Natasha from Hacker Noon" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*Bhm5scV5_fRehZv_AlRSeQ.jpeg" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@hackernoontech?source=post_internal_links---------3----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Natasha from Hacker Noon</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hy l">
                                                                                            <p class="bm b hi bo cn">in</p>
                                                                                        </div>
                                                                                        <div class="l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://medium.com/hackernoon?source=post_internal_links---------3----------------------------" rel="noopener follow">
                                                                                                <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">HackerNoon.com</p>
                                                                                            </a></div>
                                                                                    </div><a rel="noopener follow" href="/hackernoon/aprils-most-read-tech-stories-2019-4aa61f0088d2?source=post_internal_links---------3----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>April’s Most Read Tech Stories — 2019</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/hackernoon/aprils-most-read-tech-stories-2019-4aa61f0088d2?source=post_internal_links---------3----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*W4OGDvFmENYuwv4VX8vjwQ.jpeg" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@jetruby?source=post_internal_links---------4----------------------------">
                                                                                                <div class="l do"><img alt="JetRuby Agency" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*T9TPiuBNn7FOoPNxEczeYw.png" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@jetruby?source=post_internal_links---------4----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">JetRuby Agency</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@jetruby/move-shanghai-e03a4d8618c?source=post_internal_links---------4----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>MOVE Shanghai</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@jetruby/move-shanghai-e03a4d8618c?source=post_internal_links---------4----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/0*_CuAgQAysYltX-ey." width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@betsy_48092?source=post_internal_links---------5----------------------------">
                                                                                                <div class="l do"><img alt="Betsy Nelson" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/1*KGD8w4osffjx7f9kySay-g.jpeg" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@betsy_48092?source=post_internal_links---------5----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Betsy Nelson</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@betsy_48092/time-tracking-is-not-a-band-aid-for-management-or-trust-problems-3ec15827cb1c?source=post_internal_links---------5----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>Time Tracking is NOT a Band-Aid for Management or Trust Problems</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@betsy_48092/time-tracking-is-not-a-band-aid-for-management-or-trust-problems-3ec15827cb1c?source=post_internal_links---------5----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/0*VnlB-7y5E5u5gAdd" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@sumedhk24?source=post_internal_links---------6----------------------------">
                                                                                                <div class="l do"><img alt="Sumedh Kandadai" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/0*AalKpoeRNZPsgNkc" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@sumedhk24?source=post_internal_links---------6----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Sumedh Kandadai</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@sumedhk24/cs371p-spring-2022-week-12-sumedh-kandadai-3432586daeef?source=post_internal_links---------6----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>CS371p Spring 2022 Week #12: Sumedh Kandadai</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@sumedhk24/cs371p-spring-2022-week-12-sumedh-kandadai-3432586daeef?source=post_internal_links---------6----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*1jifHB9eBJ8SeJ1GQnxo5w.jpeg" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sa sb sc sd se sf sg sh si sj sk sl sm sn so sp sq sr ss st su">
                                                                <div class="ce ag">
                                                                    <div class="sv l">
                                                                        <div class="sw o da dx">
                                                                            <div class="o hc u">
                                                                                <div class="sx o da sy">
                                                                                    <div class="sz o ao">
                                                                                        <div class="ta l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@kevin.hernandez288?source=post_internal_links---------7----------------------------">
                                                                                                <div class="l do"><img alt="Kevin Hernandez" class="l ch fl tb tc fp" src="https://miro.medium.com/fit/c/20/20/0*U-XXypysoxnudz-n" width="20" height="20" />
                                                                                                    <div class="fk fl l tb tc fo aq"></div>
                                                                                                </div>
                                                                                            </a></div>
                                                                                        <div class="hy l">
                                                                                            <div>
                                                                                                <div class="ci" aria-hidden="false">
                                                                                                    <div class="o"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@kevin.hernandez288?source=post_internal_links---------7----------------------------">
                                                                                                            <p class="bm b hi bo fs ft fu fv fw fx fy fz ga">Kevin Hernandez</p>
                                                                                                        </a></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a rel="noopener follow" href="/@kevin.hernandez288/what-is-character-encoding-8e966a046c98?source=post_internal_links---------7----------------------------">
                                                                                        <h2 class="bm jh dm bo fs td fu fv te fx fz jf ga">
                                                                                            <div>What is Character encoding?</div>
                                                                                        </h2>
                                                                                    </a>
                                                                                </div><a rel="noopener follow" href="/@kevin.hernandez288/what-is-character-encoding-8e966a046c98?source=post_internal_links---------7----------------------------">
                                                                                    <div class="tf l">
                                                                                        <div class="m l do fp">
                                                                                            <div class="tg ns l"><img alt="" class="th" src="https://miro.medium.com/focal/112/112/50/50/1*YHCjJWrZM5SCbgo4SfefsA.png" width="56" role="presentation" /></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d">
                                    <div class="ti tj tk l pm ar ed as tl tm">
                                        <div class="o dx">
                                            <div class="fa fb tn to tp tq em ce"><a class="au av aw ax ay az ba bb bc bd tr ts bg tt tu" aria-label="Go to homepage" rel="noopener follow" href="/?source=post_page-----de200c8d4467--------------------------------"><svg viewBox="0 0 3940 610" class="hl tv">
                                                        <path d="M594.79 308.2c0 163.76-131.85 296.52-294.5 296.52S5.8 472 5.8 308.2 137.65 11.69 300.29 11.69s294.5 132.75 294.5 296.51M917.86 308.2c0 154.16-65.93 279.12-147.25 279.12s-147.25-125-147.25-279.12S689.29 29.08 770.61 29.08s147.25 125 147.25 279.12M1050 308.2c0 138.12-23.19 250.08-51.79 250.08s-51.79-112-51.79-250.08 23.19-250.08 51.8-250.08S1050 170.09 1050 308.2M1862.77 37.4l.82-.18v-6.35h-167.48l-155.51 365.5-155.51-365.5h-180.48v6.35l.81.18c30.57 6.9 46.09 17.19 46.09 54.3v434.45c0 37.11-15.58 47.4-46.15 54.3l-.81.18V587H1327v-6.35l-.81-.18c-30.57-6.9-46.09-17.19-46.09-54.3V116.9L1479.87 587h11.33l205.59-483.21V536.9c-2.62 29.31-18 38.36-45.68 44.61l-.82.19v6.3h213.3v-6.3l-.82-.19c-27.71-6.25-43.46-15.3-46.08-44.61l-.14-445.2h.14c0-37.11 15.52-47.4 46.08-54.3m97.43 287.8c3.49-78.06 31.52-134.4 78.56-135.37 14.51.24 26.68 5 36.14 14.16 20.1 19.51 29.55 60.28 28.09 121.21zm-2.11 22h250v-1.05c-.71-59.69-18-106.12-51.34-138-28.82-27.55-71.49-42.71-116.31-42.71h-1c-23.26 0-51.79 5.64-72.09 15.86-23.11 10.7-43.49 26.7-60.45 47.7-27.3 33.83-43.84 79.55-47.86 130.93-.13 1.54-.24 3.08-.35 4.62s-.18 2.92-.25 4.39a332.64 332.64 0 0 0-.36 21.69C1860.79 507 1923.65 600 2035.3 600c98 0 155.07-71.64 169.3-167.8l-7.19-2.53c-25 51.68-69.9 83-121 79.18-69.76-5.22-123.2-75.95-118.35-161.63m532.69 157.68c-8.2 19.45-25.31 30.15-48.24 30.15s-43.89-15.74-58.78-44.34c-16-30.7-24.42-74.1-24.42-125.51 0-107 33.28-176.21 84.79-176.21 21.57 0 38.55 10.7 46.65 29.37zm165.84 76.28c-30.57-7.23-46.09-18-46.09-57V5.28L2424.77 60v6.7l1.14-.09c25.62-2.07 43 1.47 53.09 10.79 7.9 7.3 11.75 18.5 11.75 34.26v71.14c-18.31-11.69-40.09-17.38-66.52-17.38-53.6 0-102.59 22.57-137.92 63.56-36.83 42.72-56.3 101.1-56.3 168.81C2230 518.72 2289.53 600 2378.13 600c51.83 0 93.53-28.4 112.62-76.3V588h166.65v-6.66zm159.29-505.33c0-37.76-28.47-66.24-66.24-66.24-37.59 0-67 29.1-67 66.24s29.44 66.24 67 66.24c37.77 0 66.24-28.48 66.24-66.24m43.84 505.33c-30.57-7.23-46.09-18-46.09-57h-.13V166.65l-166.66 47.85v6.5l1 .09c36.06 3.21 45.93 15.63 45.93 57.77V588h166.8v-6.66zm427.05 0c-30.57-7.23-46.09-18-46.09-57V166.65L3082 212.92v6.52l.94.1c29.48 3.1 38 16.23 38 58.56v226c-9.83 19.45-28.27 31-50.61 31.78-36.23 0-56.18-24.47-56.18-68.9V166.66l-166.66 47.85V221l1 .09c36.06 3.2 45.94 15.62 45.94 57.77v191.27a214.48 214.48 0 0 0 3.47 39.82l3 13.05c14.11 50.56 51.08 77 109 77 49.06 0 92.06-30.37 111-77.89v66h166.66v-6.66zM3934.2 588v-6.67l-.81-.19c-33.17-7.65-46.09-22.07-46.09-51.43v-243.2c0-75.83-42.59-121.09-113.93-121.09-52 0-95.85 30.05-112.73 76.86-13.41-49.6-52-76.86-109.06-76.86-50.12 0-89.4 26.45-106.25 71.13v-69.87l-166.66 45.89v6.54l1 .09c35.63 3.16 45.93 15.94 45.93 57V588h155.5v-6.66l-.82-.2c-26.46-6.22-35-17.56-35-46.66V255.72c7-16.35 21.11-35.72 49-35.72 34.64 0 52.2 24 52.2 71.28V588h155.54v-6.66l-.82-.2c-26.46-6.22-35-17.56-35-46.66v-248a160.45 160.45 0 0 0-2.2-27.68c7.42-17.77 22.34-38.8 51.37-38.8 35.13 0 52.2 23.31 52.2 71.28V588z"></path>
                                                    </svg></a>
                                                <div class="tw l">
                                                    <p class="bm b hi bo tx"><a class="au av aw ax ay az ba bb bc bd ty bg tt tu on" href="https://medium.com/about?autoplay=1&amp;source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">About</a><a class="au av aw ax ay az ba bb bc bd ty bg tt tu on" href="https://help.medium.com/hc/en-us?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">Help</a><a class="au av aw ax ay az ba bb bc bd ty bg tt tu on" href="https://policy.medium.com/medium-terms-of-service-9db0094a1e0f?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">Terms</a><a class="au av aw ax ay az ba bb bc bd ty bg tt tu" href="https://policy.medium.com/medium-privacy-policy-f03bf92035c9?source=post_page-----de200c8d4467--------------------------------" rel="noopener follow">Privacy</a></p>
                                                </div>
                                                <div class="j i d">
                                                    <hr class="dr ds tz ua" aria-hidden="true" />
                                                    <h2 class="bm qz dm bo jf tx">Get the Medium app</h2>
                                                    <div class="tw o">
                                                        <div class="fj l"><a class="au av aw ax ay az ba bb bc bd tr ts bg tt tu" href="https://itunes.apple.com/app/medium-everyones-stories/id828256236?pt=698524&amp;mt=8&amp;ct=post_page&amp;source=post_page-----de200c8d4467--------------------------------" rel="noopener follow"><img alt="A button that says &#x27;Download on the App Store&#x27;, and if clicked it will lead you to the iOS App store" class="" src="https://miro.medium.com/max/270/1*Crl55Tm6yDNMoucPo1tvDg.png" width="135" height="41" /></a></div><a class="au av aw ax ay az ba bb bc bd tr ts bg tt tu" href="https://play.google.com/store/apps/details?id=com.medium.reader&amp;source=post_page-----de200c8d4467--------------------------------" rel="noopener follow"><img alt="A button that says &#x27;Get it on, Google Play&#x27;, and if clicked it will lead you to the Google Play store" class="" src="https://miro.medium.com/max/270/1*W_RAPQ62h0em559zluJLdQ.png" width="135" height="41" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <div class="eo ch c ep h k j i cu eq er es">
                            <div class="ag ce ci do">
                                <div class="l db aq">
                                    <div class="eq o da">
                                        <div class="l po">
                                            <div class="ub uc ud l">
                                                <div class="l">
                                                    <div class="o ao">
                                                        <div class="pw-susi-button l po"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;source=post_page--------------------------nav_reg-----------"><button class="bm b bn bo bp bq br bs bt bu bv bw bx by bz ca cb cc cd ce cf cg ch ci cj" aria-label="sign up">Get started</button></a></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ub uc ud l">
                                                <div class="o il ue uf">
                                                    <div class="ci" aria-hidden="false" aria-describedby="searchResults" aria-labelledby="searchResults"></div><span class="uk l"><svg width="25" height="25" viewBox="0 0 25 25" fill="rgba(8, 8, 8, 1)">
                                                            <path d="M20.07 18.93l-4.16-4.15a6 6 0 1 0-.88.88l4.15 4.16a.62.62 0 1 0 .89-.89zM6.5 11a4.75 4.75 0 1 1 9.5 0 4.75 4.75 0 0 1-9.5 0z"></path>
                                                        </svg></span><input role="combobox" aria-controls="searchResults" aria-expanded="false" aria-label="search" tabindex="0" class="dz ug bm bn bo on ce uh ui ga uj" placeholder="Search" value="" />
                                                </div>
                                            </div>
                                            <div class="ub uc ud l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@avinashn">
                                                    <div class="l do"><img alt="Avinash Nethala" class="l ch fl ul um fp" src="https://miro.medium.com/fit/c/88/88/1*PkI361PMd8PTBjqB8LQvJg.jpeg" width="88" height="88" />
                                                        <div class="fk fl l ul um fo aq"></div>
                                                    </div>
                                                </a>
                                                <div class="un l"></div><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/@avinashn">
                                                    <h2 class="pw-author-name bm qz dm bo jf ga">Avinash Nethala</h2>
                                                </a>
                                                <div class="uo l"></div><span class="pw-follower-count bm b dm dn cn"><button class="au av aw ax ay az ba bb bc bd be bf bg bh bi">522 Followers</button></span>
                                                <div class="oy l"></div>
                                                <p class="bm b bn bo cn">An enthusiast Web Developer and Owner of <a class="au av aw ax ay az ba bb bc bd bg bh bi lb ja" href="http://justlaravel.com" rel="noopener  ugc nofollow">justlaravel.com</a>, <a class="au av aw ax ay az ba bb bc bd bg bh bi lb ja" href="http://programminginpython.com" rel="noopener  ugc nofollow">programminginpython.com</a>, <a class="au av aw ax ay az ba bb bc bd bg bh bi lb ja" href="http://mycodingcorner.com" rel="noopener  ugc nofollow">mycodingcorner.com</a> and other sites.</p>
                                                <div class="up l"></div>
                                                <div class="uq o"><span><button class="bm b bn bo hj bq hl hm hn ho hp bd bz hq hr hs cd ur cf cg ch ci cj">Follow</button></span>
                                                    <div class="us l">
                                                        <div>
                                                            <div>
                                                                <div class="ci" aria-hidden="false">
                                                                    <div class="l"><span><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/m/signin?actionUrl=%2F_%2Fapi%2Fsubscriptions%2Fnewsletters%2F9e3d0b3d21b3&amp;operation=register&amp;redirect=https%3A%2F%2Fmedium.com%2Fjustlaravel%2Fhow-to-implement-datatables-in-laravel-de200c8d4467&amp;newsletterV3=2abbbee3a59&amp;newsletterV3Id=9e3d0b3d21b3&amp;user=Avinash+Nethala&amp;userId=2abbbee3a59&amp;source=--------------------------subscribe_user-----------"><button class="bm b bn bo bp bb br bs bt bu bv bw bx by bz hq hr hs cd cf cg ch ci cj" aria-label="Subscribe"><svg width="38" height="38" viewBox="0 0 38 38" fill="none" class="ut uu uv">
                                                                                        <rect x="26.25" y="9.25" width="0.5" height="6.5" rx="0.25"></rect>
                                                                                        <rect x="29.75" y="12.25" width="0.5" height="6.5" rx="0.25" transform="rotate(90 29.75 12.25)"></rect>
                                                                                        <path d="M19.5 12.5h-7a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-5"></path>
                                                                                        <path d="M11.5 14.5L19 20l4-3"></path>
                                                                                    </svg></button></a></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ub uc ud l"></div>
                                        </div>
                                        <div class="uw o hc ht">
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://help.medium.com/hc/en-us" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Help</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://medium.statuspage.io" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Status</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://about.medium.com/creators/" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Writers</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://blog.medium.com" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Blog</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" rel="noopener follow" href="/jobs-at-medium/work-at-medium-959d1a85284e">
                                                    <p class="bm b uy uz cn">Careers</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://policy.medium.com/medium-privacy-policy-f03bf92035c9" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Privacy</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://policy.medium.com/medium-terms-of-service-9db0094a1e0f" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Terms</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://medium.com/about?autoplay=1" rel="noopener follow">
                                                    <p class="bm b uy uz cn">About</p>
                                                </a></div>
                                            <div class="ux l"><a class="au av aw ax ay az ba bb bc bd be bf bg bh bi" href="https://knowable.fyi" rel="noopener follow">
                                                    <p class="bm b uy uz cn">Knowable</p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.__BUILD_ID__ = "main-20220907-180101-acdabca5cc"
    </script>
    <script>
        window.__GRAPHQL_URI__ = "https://medium.com/_/graphql"
    </script>
    <script>
        window.__PRELOADED_STATE__ = {
            "algolia": {
                "queries": {}
            },
            "auroraPage": {
                "isAuroraPageEnabled": false
            },
            "cache": {
                "experimentGroupSet": true,
                "reason": "Edgy did not set shouldUseCache to true",
                "group": "disabled",
                "tags": ["group-edgeCachePosts", "post-de200c8d4467", "user-2abbbee3a59", "collection-6a4ff95f590f"],
                "serverVariantState": "",
                "middlewareEnabled": true,
                "cacheStatus": "DYNAMIC",
                "shouldUseCache": false,
                "vary": [],
                "inDisabledExperiment": true
            },
            "client": {
                "hydrated": false,
                "isUs": false,
                "isNativeMedium": false,
                "isSafariMobile": false,
                "isSafari": false,
                "isFirefox": true,
                "routingEntity": {
                    "type": "DEFAULT",
                    "explicit": false
                },
                "viewerIsBot": false
            },
            "debug": {
                "requestId": "22aff94b-2eaf-46f2-ba22-d14aeb0b134d",
                "hybridDevServices": [],
                "originalSpanCarrier": {
                    "ot-tracer-spanid": "06562d902f8ca78d",
                    "ot-tracer-traceid": "22ff6cf2198389d9",
                    "ot-tracer-sampled": "true"
                }
            },
            "meter": {},
            "multiVote": {
                "clapsPerPost": {}
            },
            "navigation": {
                "branch": {
                    "show": null,
                    "hasRendered": null,
                    "blockedByCTA": false
                },
                "hideGoogleOneTap": false,
                "hasRenderedAlternateUserBanner": null,
                "currentLocation": "https:\u002F\u002Fmedium.com\u002Fjustlaravel\u002Fhow-to-implement-datatables-in-laravel-de200c8d4467",
                "host": "medium.com",
                "hostname": "medium.com",
                "referrer": "https:\u002F\u002Fwww.google.com\u002F",
                "hasSetReferrer": false,
                "susiModal": {
                    "step": null,
                    "operation": "register"
                },
                "postRead": false
            },
            "config": {
                "nodeEnv": "production",
                "version": "main-20220907-180101-acdabca5cc",
                "target": "production",
                "productName": "Medium",
                "publicUrl": "https:\u002F\u002Fcdn-client.medium.com\u002Flite",
                "authDomain": "medium.com",
                "authGoogleClientId": "216296035834-k1k6qe060s2tp2a2jam4ljdcms00sttg.apps.googleusercontent.com",
                "favicon": "production",
                "glyphUrl": "https:\u002F\u002Fglyph.medium.com",
                "branchKey": "key_live_ofxXr2qTrrU9NqURK8ZwEhknBxiI6KBm",
                "algolia": {
                    "appId": "MQ57UUUQZ2",
                    "apiKeySearch": "394474ced050e3911ae2249ecc774921",
                    "indexPrefix": "medium_",
                    "host": "-dsn.algolia.net"
                },
                "recaptchaKey": "6Lfc37IUAAAAAKGGtC6rLS13R1Hrw_BqADfS1LRk",
                "recaptcha3Key": "6Lf8R9wUAAAAABMI_85Wb8melS7Zj6ziuf99Yot5",
                "datadog": {
                    "applicationId": "6702d87d-a7e0-42fe-bbcb-95b469547ea0",
                    "clientToken": "pub853ea8d17ad6821d9f8f11861d23dfed",
                    "rumToken": "pubf9cc52896502b9413b68ba36fc0c7162",
                    "context": {
                        "deployment": {
                            "target": "production",
                            "tag": "main-20220907-180101-acdabca5cc",
                            "commit": "acdabca5cc2799709d3f0274b9199935ffa98d15"
                        }
                    },
                    "datacenter": "us"
                },
                "googleAnalyticsCode": "UA-24232453-2",
                "googlePay": {
                    "apiVersion": "2",
                    "apiVersionMinor": "0",
                    "merchantId": "BCR2DN6TV7EMTGBM",
                    "merchantName": "Medium",
                    "instanceMerchantId": "13685562959212738550"
                },
                "applePay": {
                    "version": 3
                },
                "signInWallCustomDomainCollectionIds": ["3a8144eabfe3", "336d898217ee", "61061eb0c96b", "138adf9c44c", "819cc2aaeee0"],
                "mediumOwnedAndOperatedCollectionIds": ["8a9336e5bb4", "b7e45b22fec3", "193b68bd4fba", "8d6b8a439e32", "54c98c43354d", "3f6ecf56618", "d944778ce714", "92d2092dc598", "ae2a65f35510", "1285ba81cada", "544c7006046e", "fc8964313712", "40187e704f1c", "88d9857e584e", "7b6769f2748b", "bcc38c8f6edf", "cef6983b292", "cb8577c9149e", "444d13b52878", "713d7dbc99b0", "ef8e90590e66", "191186aaafa0", "55760f21cdc5", "9dc80918cc93", "bdc4052bbdba", "8ccfed20cbb2"],
                "tierOneDomains": ["medium.com", "thebolditalic.com", "arcdigital.media", "towardsdatascience.com", "uxdesign.cc", "codeburst.io", "psiloveyou.xyz", "writingcooperative.com", "entrepreneurshandbook.co", "prototypr.io", "betterhumans.coach.me", "theascent.pub"],
                "topicsToFollow": ["d61cf867d93f", "8a146bc21b28", "1eca0103fff3", "4d562ee63426", "aef1078a3ef5", "e15e46793f8d", "6158eb913466", "55f1c20aba7a", "3d18b94f6858", "4861fee224fd", "63c6f1f93ee", "1d98b3a9a871", "decb52b64abf", "ae5d4995e225", "830cded25262"],
                "topicToTagMappings": {
                    "accessibility": "accessibility",
                    "addiction": "addiction",
                    "android-development": "android-development",
                    "art": "art",
                    "artificial-intelligence": "artificial-intelligence",
                    "astrology": "astrology",
                    "basic-income": "basic-income",
                    "beauty": "beauty",
                    "biotech": "biotech",
                    "blockchain": "blockchain",
                    "books": "books",
                    "business": "business",
                    "cannabis": "cannabis",
                    "cities": "cities",
                    "climate-change": "climate-change",
                    "comics": "comics",
                    "coronavirus": "coronavirus",
                    "creativity": "creativity",
                    "cryptocurrency": "cryptocurrency",
                    "culture": "culture",
                    "cybersecurity": "cybersecurity",
                    "data-science": "data-science",
                    "design": "design",
                    "digital-life": "digital-life",
                    "disability": "disability",
                    "economy": "economy",
                    "education": "education",
                    "equality": "equality",
                    "family": "family",
                    "feminism": "feminism",
                    "fiction": "fiction",
                    "film": "film",
                    "fitness": "fitness",
                    "food": "food",
                    "freelancing": "freelancing",
                    "future": "future",
                    "gadgets": "gadgets",
                    "gaming": "gaming",
                    "gun-control": "gun-control",
                    "health": "health",
                    "history": "history",
                    "humor": "humor",
                    "immigration": "immigration",
                    "ios-development": "ios-development",
                    "javascript": "javascript",
                    "justice": "justice",
                    "language": "language",
                    "leadership": "leadership",
                    "lgbtqia": "lgbtqia",
                    "lifestyle": "lifestyle",
                    "machine-learning": "machine-learning",
                    "makers": "makers",
                    "marketing": "marketing",
                    "math": "math",
                    "media": "media",
                    "mental-health": "mental-health",
                    "mindfulness": "mindfulness",
                    "money": "money",
                    "music": "music",
                    "neuroscience": "neuroscience",
                    "nonfiction": "nonfiction",
                    "outdoors": "outdoors",
                    "parenting": "parenting",
                    "pets": "pets",
                    "philosophy": "philosophy",
                    "photography": "photography",
                    "podcasts": "podcast",
                    "poetry": "poetry",
                    "politics": "politics",
                    "privacy": "privacy",
                    "product-management": "product-management",
                    "productivity": "productivity",
                    "programming": "programming",
                    "psychedelics": "psychedelics",
                    "psychology": "psychology",
                    "race": "race",
                    "relationships": "relationships",
                    "religion": "religion",
                    "remote-work": "remote-work",
                    "san-francisco": "san-francisco",
                    "science": "science",
                    "self": "self",
                    "self-driving-cars": "self-driving-cars",
                    "sexuality": "sexuality",
                    "social-media": "social-media",
                    "society": "society",
                    "software-engineering": "software-engineering",
                    "space": "space",
                    "spirituality": "spirituality",
                    "sports": "sports",
                    "startups": "startup",
                    "style": "style",
                    "technology": "technology",
                    "transportation": "transportation",
                    "travel": "travel",
                    "true-crime": "true-crime",
                    "tv": "tv",
                    "ux": "ux",
                    "venture-capital": "venture-capital",
                    "visual-design": "visual-design",
                    "work": "work",
                    "world": "world",
                    "writing": "writing"
                },
                "defaultImages": {
                    "avatar": {
                        "imageId": "1*dmbNkD5D-u45r44go_cf0g.png",
                        "height": 150,
                        "width": 150
                    },
                    "orgLogo": {
                        "imageId": "1*OMF3fSqH8t4xBJ9-6oZDZw.png",
                        "height": 106,
                        "width": 545
                    },
                    "postLogo": {
                        "imageId": "1*kFrc4tBFM_tCis-2Ic87WA.png",
                        "height": 810,
                        "width": 1440
                    },
                    "postPreviewImage": {
                        "imageId": "1*hn4v1tCaJy7cWMyb0bpNpQ.png",
                        "height": 386,
                        "width": 579
                    }
                },
                "collectionStructuredData": {
                    "8d6b8a439e32": {
                        "name": "Elemental",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fcdn-images-1.medium.com\u002Fmax\u002F980\u002F1*9ygdqoKprhwuTVKUM0DLPA@2x.png",
                                "width": 980,
                                "height": 159
                            }
                        }
                    },
                    "3f6ecf56618": {
                        "name": "Forge",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fcdn-images-1.medium.com\u002Fmax\u002F596\u002F1*uULpIlImcO5TDuBZ6lm7Lg@2x.png",
                                "width": 596,
                                "height": 183
                            }
                        }
                    },
                    "ae2a65f35510": {
                        "name": "GEN",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F264\u002F1*RdVZMdvfV3YiZTw6mX7yWA.png",
                                "width": 264,
                                "height": 140
                            }
                        }
                    },
                    "88d9857e584e": {
                        "name": "LEVEL",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F540\u002F1*JqYMhNX6KNNb2UlqGqO2WQ.png",
                                "width": 540,
                                "height": 108
                            }
                        }
                    },
                    "7b6769f2748b": {
                        "name": "Marker",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fcdn-images-1.medium.com\u002Fmax\u002F383\u002F1*haCUs0wF6TgOOvfoY-jEoQ@2x.png",
                                "width": 383,
                                "height": 92
                            }
                        }
                    },
                    "444d13b52878": {
                        "name": "OneZero",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F540\u002F1*cw32fIqCbRWzwJaoQw6BUg.png",
                                "width": 540,
                                "height": 123
                            }
                        }
                    },
                    "8ccfed20cbb2": {
                        "name": "Zora",
                        "data": {
                            "@type": "NewsMediaOrganization",
                            "ethicsPolicy": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Farticles\u002F360043290473",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "https:\u002F\u002Fmiro.medium.com\u002Fmax\u002F540\u002F1*tZUQqRcCCZDXjjiZ4bDvgQ.png",
                                "width": 540,
                                "height": 106
                            }
                        }
                    }
                },
                "embeddedPostIds": {
                    "coronavirus": "cd3010f9d81f"
                },
                "sharedCdcMessaging": {
                    "COVID_APPLICABLE_TAG_SLUGS": [],
                    "COVID_APPLICABLE_TOPIC_NAMES": [],
                    "COVID_APPLICABLE_TOPIC_NAMES_FOR_TOPIC_PAGE": [],
                    "COVID_MESSAGES": {
                        "tierA": {
                            "text": "For more information on the novel coronavirus and Covid-19, visit cdc.gov.",
                            "markups": [{
                                "start": 66,
                                "end": 73,
                                "href": "https:\u002F\u002Fwww.cdc.gov\u002Fcoronavirus\u002F2019-nCoV"
                            }]
                        },
                        "tierB": {
                            "text": "Anyone can publish on Medium per our Policies, but we don’t fact-check every story. For more info about the coronavirus, see cdc.gov.",
                            "markups": [{
                                "start": 37,
                                "end": 45,
                                "href": "https:\u002F\u002Fhelp.medium.com\u002Fhc\u002Fen-us\u002Fcategories\u002F201931128-Policies-Safety"
                            }, {
                                "start": 125,
                                "end": 132,
                                "href": "https:\u002F\u002Fwww.cdc.gov\u002Fcoronavirus\u002F2019-nCoV"
                            }]
                        },
                        "paywall": {
                            "text": "This article has been made free for everyone, thanks to Medium Members. For more information on the novel coronavirus and Covid-19, visit cdc.gov.",
                            "markups": [{
                                "start": 56,
                                "end": 70,
                                "href": "https:\u002F\u002Fmedium.com\u002Fmembership"
                            }, {
                                "start": 138,
                                "end": 145,
                                "href": "https:\u002F\u002Fwww.cdc.gov\u002Fcoronavirus\u002F2019-nCoV"
                            }]
                        },
                        "unbound": {
                            "text": "This article is free for everyone, thanks to Medium Members. For more information on the novel coronavirus and Covid-19, visit cdc.gov.",
                            "markups": [{
                                "start": 45,
                                "end": 59,
                                "href": "https:\u002F\u002Fmedium.com\u002Fmembership"
                            }, {
                                "start": 127,
                                "end": 134,
                                "href": "https:\u002F\u002Fwww.cdc.gov\u002Fcoronavirus\u002F2019-nCoV"
                            }]
                        }
                    },
                    "COVID_BANNER_POST_ID_OVERRIDE_WHITELIST": ["3b31a67bff4a"]
                },
                "sharedVoteMessaging": {
                    "TAGS": ["politics", "election-2020", "government", "us-politics", "election", "2020-presidential-race", "trump", "donald-trump", "democrats", "republicans", "congress", "republican-party", "democratic-party", "biden", "joe-biden", "maga"],
                    "TOPICS": ["politics", "election"],
                    "MESSAGE": {
                        "text": "Find out more about the U.S. election results here.",
                        "markups": [{
                            "start": 46,
                            "end": 50,
                            "href": "https:\u002F\u002Fcookpolitical.com\u002F2020-national-popular-vote-tracker"
                        }]
                    },
                    "EXCLUDE_POSTS": ["397ef29e3ca5"]
                },
                "embedPostRules": [],
                "recircOptions": {
                    "v1": {
                        "limit": 3
                    },
                    "v2": {
                        "limit": 8
                    }
                },
                "braintreeClientKey": "production_zjkj96jm_m56f8fqpf7ngnrd4",
                "braintree": {
                    "enabled": true,
                    "merchantId": "m56f8fqpf7ngnrd4",
                    "merchantAccountId": {
                        "usd": "AMediumCorporation_instant",
                        "eur": "amediumcorporation_EUR",
                        "cad": "amediumcorporation_CAD"
                    },
                    "publicKey": "ds2nn34bg2z7j5gd",
                    "braintreeEnvironment": "production",
                    "dashboardUrl": "https:\u002F\u002Fwww.braintreegateway.com\u002Fmerchants",
                    "gracePeriodDurationInDays": 14,
                    "mediumMembershipPlanId": {
                        "monthly": "ce105f8c57a3",
                        "monthlyWithTrial": "d5ee3dbe3db8",
                        "yearly": "a40ad4a43185",
                        "yearlyStaff": "d74fb811198a",
                        "yearlyWithTrial": "b3bc7350e5c7",
                        "monthlyCad": "p52orjkaceei",
                        "yearlyCad": "h4q9g2up9ktt"
                    },
                    "braintreeDiscountId": {
                        "oneMonthFree": "MONTHS_FREE_01",
                        "threeMonthsFree": "MONTHS_FREE_03",
                        "sixMonthsFree": "MONTHS_FREE_06"
                    },
                    "3DSecureVersion": "2",
                    "defaultCurrency": "usd",
                    "providerPlanIdCurrency": {
                        "4ycw": "usd",
                        "rz3b": "usd",
                        "3kqm": "usd",
                        "jzw6": "usd",
                        "c2q2": "usd",
                        "nnsw": "usd",
                        "fx7w": "cad",
                        "nwf2": "cad"
                    }
                },
                "paypalClientId": "AXj1G4fotC2GE8KzWX9mSxCH1wmPE3nJglf4Z2ig_amnhvlMVX87otaq58niAg9iuLktVNF_1WCMnN7v",
                "paypal": {
                    "host": "https:\u002F\u002Fapi.paypal.com:443",
                    "clientMode": "production",
                    "serverMode": "live",
                    "webhookId": "4G466076A0294510S",
                    "monthlyPlan": {
                        "planId": "P-9WR0658853113943TMU5FDQA",
                        "name": "Medium Membership (Monthly) with setup fee",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed monthly."
                    },
                    "yearlyPlan": {
                        "planId": "P-7N8963881P8875835MU5JOPQ",
                        "name": "Medium Membership (Annual) with setup fee",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed annually."
                    },
                    "oneYearGift": {
                        "name": "Medium Membership (1 Year, Digital Gift Code)",
                        "description": "Unlimited access to the best and brightest stories on Medium. Gift codes can be redeemed at medium.com\u002Fredeem.",
                        "price": "50.00",
                        "currency": "USD",
                        "sku": "membership-gift-1-yr"
                    },
                    "oldMonthlyPlan": {
                        "planId": "P-96U02458LM656772MJZUVH2Y",
                        "name": "Medium Membership (Monthly)",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed monthly."
                    },
                    "oldYearlyPlan": {
                        "planId": "P-59P80963JF186412JJZU3SMI",
                        "name": "Medium Membership (Annual)",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed annually."
                    },
                    "monthlyPlanWithTrial": {
                        "planId": "P-66C21969LR178604GJPVKUKY",
                        "name": "Medium Membership (Monthly) with setup fee",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed monthly."
                    },
                    "yearlyPlanWithTrial": {
                        "planId": "P-6XW32684EX226940VKCT2MFA",
                        "name": "Medium Membership (Annual) with setup fee",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed annually."
                    },
                    "oldMonthlyPlanNoSetupFee": {
                        "planId": "P-4N046520HR188054PCJC7LJI",
                        "name": "Medium Membership (Monthly)",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed monthly."
                    },
                    "oldYearlyPlanNoSetupFee": {
                        "planId": "P-7A4913502Y5181304CJEJMXQ",
                        "name": "Medium Membership (Annual)",
                        "description": "Unlimited access to the best and brightest stories on Medium. Membership billed annually."
                    },
                    "sdkUrl": "https:\u002F\u002Fwww.paypal.com\u002Fsdk\u002Fjs"
                },
                "stripePublishableKey": "pk_live_7FReX44VnNIInZwrIIx6ghjl",
                "log": {
                    "json": true,
                    "level": "info"
                },
                "responsiveImages": ["0b", "0c", "0d", "0e", "0f", "1b", "1c", "1d", "1e", "1f", "2b", "2c", "2d", "2e", "2f", "3b", "3c", "3d", "3e", "3f", "4b", "4c", "4d", "4e", "4f", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a"]
            },
            "session": {
                "xsrf": ""
            }
        }
    </script>
    <script>
        window.__APOLLO_STATE__ = {
            "ROOT_QUERY": {
                "__typename": "Query",
                "variantFlags": [{
                    "__typename": "VariantFlag",
                    "name": "enable_email_sign_in_captcha",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_new_three_dot_menu",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_signup_friction",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "disable_edge_cache",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_twitter_auth_suggestions",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_lite_server_upstream_deadlines",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "pub_sidebar",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "covid_19_cdc_banner",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_mps_creator_growth_email",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_updated_follower_email",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "limit_user_follows",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "unhide_mobile_ctas",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_tick_landing_page",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "available_annual_plan",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "2c754bcc2995"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_digest_tagline",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "can_receive_tips_v0",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "disable_partner_program_enrollment",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_in_context_sharing",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_aurora_nav",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_group_gifting",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_homepage_reading_list",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_client",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_marketing_emails",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "author_fair_distribution_non_qp3",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_apple_webhook",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_sprig",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_ios_autorefresh",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "can_send_tips_v0",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "redefined_top_posts",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_author_cards",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_hightower_user_bonus",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_legacy_feed_in_iceland",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "glyph_font_set",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "m2-unbound"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "provider_for_credit_card_form",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "BRAINTREE"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "skip_fs_cache_user_vals",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_lite_response_markup",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_rex_reading_history",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_speechify_widget",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_updated_new_user_onboarding",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "allow_access",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "allow_signup",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_author_cards_byline",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_paypal",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_digest_generation_pipeline",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_google_webhook",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_seamless_social_sharing",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_starspace",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_iceland_nux",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "posts_under_quota_fair_distribution",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_google_pay",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "android_responses_rewrite",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_lite_homepage",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "explicit_signals_android",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_in_app_free_trial",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_creator_about_editor",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_medium2_kbfd",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_trumpland_landing_page",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_aurora_pub_follower_page",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_custom_domain_v2_settings",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_lite_continue_this_thread",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_tipping_v0_ios",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_apple_pay",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_iceland_forced_android",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "limit_post_referrers",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_import",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_reply_to_email",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_app_flirty_thirty",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_google_one_tap",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "available_monthly_plan",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "60e220181034"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_pill_based_home_feed",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_webhook",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "allow_test_auth",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "disallow"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "android_two_hour_refresh",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_apple_sign_in",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_pp_dashboard_referred_earnings",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_enable_home_post_menu",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "signup_services",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "twitter,facebook,google,email,google-fastidv,google-one-tap,apple"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_automod",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_creator_welcome_email",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "signin_services",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "twitter,facebook,google,email,google-fastidv,google-one-tap,apple"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_tag_recs",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "coronavirus_topic_recirc",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_aurora_about_page_routing",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_social_share_sheet",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_trial_membership",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_newsletter_lo_flow_custom_domains",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_post_settings_screen",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_speechify_ios",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_display_paywall_after_onboarding",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_aurora_tag_page_routing",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_evhead_com_to_ev_medium_com_redirect",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "skip_sign_in_recaptcha",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_highlander_member_digest",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "browsable_stream_config_bucket",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": "curated-topics"
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "ios_enable_lock_responses",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_auto_follow_on_subscribe",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_branch_io",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "reader_fair_distribution_non_qp",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_annual_renewal_reminder_email",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_lite_pub_homepage_for_selected_domains",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_ml_rank_rex_anno",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_footer_app_buttons",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_triton_recirc",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_tipping_v0_android",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_braintree_integration",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_rito_upstream_deadlines",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "enable_tribute_landing_page",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "explicit_signals_ios",
                    "valueType": {
                        "__typename": "VariantFlagBoolean",
                        "value": true
                    }
                }, {
                    "__typename": "VariantFlag",
                    "name": "textshots_userid",
                    "valueType": {
                        "__typename": "VariantFlagString",
                        "value": ""
                    }
                }],
                "viewer": null,
                "collectionByDomainOrSlug({\"domainOrSlug\":\"justlaravel\"})": {
                    "__ref": "Collection:6a4ff95f590f"
                },
                "postResult({\"id\":\"de200c8d4467\"})": {
                    "__ref": "Post:de200c8d4467"
                }
            },
            "ImageMetadata:": {
                "__typename": "ImageMetadata",
                "id": ""
            },
            "Collection:6a4ff95f590f": {
                "__typename": "Collection",
                "id": "6a4ff95f590f",
                "favicon": {
                    "__ref": "ImageMetadata:"
                },
                "customStyleSheet": null,
                "colorPalette": {
                    "__typename": "ColorPalette",
                    "highlightSpectrum": {
                        "__typename": "ColorSpectrum",
                        "backgroundColor": "#FFFFFFFF",
                        "colorPoints": [{
                            "__typename": "ColorPoint",
                            "color": "#FFFFE6D3",
                            "point": 0
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFE2CC",
                            "point": 0.1
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFDEC5",
                            "point": 0.2
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFDABE",
                            "point": 0.3
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFD6B7",
                            "point": 0.4
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFD2B0",
                            "point": 0.5
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFCEA9",
                            "point": 0.6
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFC9A2",
                            "point": 0.7
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFC59B",
                            "point": 0.8
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFC194",
                            "point": 0.9
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFBD8D",
                            "point": 1
                        }]
                    },
                    "defaultBackgroundSpectrum": {
                        "__typename": "ColorSpectrum",
                        "backgroundColor": "#FFFFFFFF",
                        "colorPoints": [{
                            "__typename": "ColorPoint",
                            "color": "#FFCE5C2B",
                            "point": 0
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFBE572B",
                            "point": 0.1
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFAF522A",
                            "point": 0.2
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF9F4C28",
                            "point": 0.3
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF8F4626",
                            "point": 0.4
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF7F3F24",
                            "point": 0.5
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF6E3821",
                            "point": 0.6
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF5D301D",
                            "point": 0.7
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF4C2818",
                            "point": 0.8
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF3A1E12",
                            "point": 0.9
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FF28140B",
                            "point": 1
                        }]
                    },
                    "tintBackgroundSpectrum": {
                        "__typename": "ColorSpectrum",
                        "backgroundColor": "#FFE36C39",
                        "colorPoints": [{
                            "__typename": "ColorPoint",
                            "color": "#FFE36C39",
                            "point": 0
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFED7A4A",
                            "point": 0.1
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFF5895B",
                            "point": 0.2
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFD976B",
                            "point": 0.3
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFA47C",
                            "point": 0.4
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFB28D",
                            "point": 0.5
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFC09F",
                            "point": 0.6
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFCDB0",
                            "point": 0.7
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFDAC2",
                            "point": 0.8
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFE8D3",
                            "point": 0.9
                        }, {
                            "__typename": "ColorPoint",
                            "color": "#FFFFF5E5",
                            "point": 1
                        }]
                    }
                },
                "googleAnalyticsId": null,
                "domain": null,
                "name": "justlaravel",
                "slug": "justlaravel",
                "avatar": {
                    "__ref": "ImageMetadata:1*g8pXMAd262UQAqn9VPgvZg.png"
                },
                "isAuroraVisible": false,
                "legacyHeaderBackgroundImage": {
                    "__ref": "ImageMetadata:1*9xf160j9CDRmffQXL_qdDQ.png"
                },
                "logo": {
                    "__ref": "ImageMetadata:1*G95ykj227pbelPTDsCd6BA.jpeg"
                },
                "subscriberCount": 656,
                "newsletterV3": null,
                "navItems": [],
                "viewerEdge": {
                    "__ref": "CollectionViewerEdge:collectionId:6a4ff95f590f-viewerId:lo_50d3d376743a"
                },
                "creator": {
                    "__ref": "User:2abbbee3a59"
                },
                "isAuroraEligible": false,
                "twitterUsername": "justLaravel",
                "facebookPageId": null,
                "customDomainState": null,
                "ptsQualifiedAt": 0,
                "description": "justlaravel.com is website all about laravel where one can find useful tutorials with working demo, source code, video demonstration and more."
            },
            "UserViewerEdge:userId:2abbbee3a59-viewerId:lo_50d3d376743a": {
                "__typename": "UserViewerEdge",
                "id": "userId:2abbbee3a59-viewerId:lo_50d3d376743a",
                "isFollowing": false,
                "isUser": false
            },
            "NewsletterV3:9e3d0b3d21b3": {
                "__typename": "NewsletterV3",
                "id": "9e3d0b3d21b3",
                "type": "NEWSLETTER_TYPE_AUTHOR",
                "slug": "2abbbee3a59",
                "name": "2abbbee3a59",
                "collection": null,
                "user": {
                    "__ref": "User:2abbbee3a59"
                },
                "description": "",
                "promoHeadline": "",
                "promoBody": "",
                "showPromo": false,
                "subscribersCount": 0
            },
            "User:2abbbee3a59": {
                "__typename": "User",
                "id": "2abbbee3a59",
                "name": "Avinash Nethala",
                "username": "avinashn",
                "newsletterV3": {
                    "__ref": "NewsletterV3:9e3d0b3d21b3"
                },
                "imageId": "1*PkI361PMd8PTBjqB8LQvJg.jpeg",
                "socialStats": {
                    "__typename": "SocialStats",
                    "followerCount": 522,
                    "followingCount": 49,
                    "collectionFollowingCount": 4
                },
                "customStyleSheet": null,
                "bio": "An enthusiast Web Developer and Owner of justlaravel.com, programminginpython.com, mycodingcorner.com and other sites.",
                "isPartnerProgramEnrolled": false,
                "viewerEdge": {
                    "__ref": "UserViewerEdge:userId:2abbbee3a59-viewerId:lo_50d3d376743a"
                },
                "viewerIsUser": false,
                "postSubscribeMembershipUpsellShownAt": 0,
                "customDomainState": null,
                "hasSubdomain": false,
                "mediumMemberAt": 0,
                "about": "",
                "homepagePostsConnection:{\"paging\":{\"limit\":1}}": {
                    "__typename": "PostConnection",
                    "posts": [{
                        "__ref": "Post:3b6640613218"
                    }]
                },
                "isSuspended": false,
                "allowNotes": true,
                "isAuroraVisible": true,
                "twitterScreenName": "justLaravel",
                "atsQualifiedAt": 1612205457104
            },
            "Post:de200c8d4467": {
                "__typename": "Post",
                "id": "de200c8d4467",
                "firstPublishedAt": 1499443198240,
                "visibility": "PUBLIC",
                "creator": {
                    "__ref": "User:2abbbee3a59"
                },
                "canonicalUrl": "https:\u002F\u002Fjustlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                "collection": {
                    "__ref": "Collection:6a4ff95f590f"
                },
                "content({\"postMeteringOptions\":{\"forceTruncation\":false}})": {
                    "__typename": "PostContent",
                    "isLockedPreviewOnly": false,
                    "validatedShareKey": "",
                    "bodyModel": {
                        "__typename": "RichText",
                        "sections": [{
                            "__typename": "Section",
                            "name": "6403",
                            "startIndex": 0,
                            "textLayout": null,
                            "imageLayout": null,
                            "backgroundImage": null,
                            "videoLayout": null,
                            "backgroundVideo": null
                        }, {
                            "__typename": "Section",
                            "name": "7b8e",
                            "startIndex": 57,
                            "textLayout": null,
                            "imageLayout": null,
                            "backgroundImage": null,
                            "videoLayout": null,
                            "backgroundVideo": null
                        }],
                        "paragraphs": [{
                            "__ref": "Paragraph:b173fbc340bf_0"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_1"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_2"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_3"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_4"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_5"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_6"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_7"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_8"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_9"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_10"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_11"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_12"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_13"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_14"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_15"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_16"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_17"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_18"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_19"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_20"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_21"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_22"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_23"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_24"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_25"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_26"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_27"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_28"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_29"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_30"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_31"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_32"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_33"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_34"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_35"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_36"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_37"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_38"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_39"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_40"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_41"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_42"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_43"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_44"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_45"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_46"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_47"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_48"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_49"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_50"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_51"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_52"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_53"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_54"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_55"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_56"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_57"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_58"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_59"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_60"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_61"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_62"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_63"
                        }, {
                            "__ref": "Paragraph:b173fbc340bf_64"
                        }]
                    }
                },
                "customStyleSheet": null,
                "isPublished": true,
                "isLocked": false,
                "license": "ALL_RIGHTS_RESERVED",
                "collaborators": [],
                "isMarkedPaywallOnly": false,
                "lockedSource": "LOCKED_POST_SOURCE_NONE",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002Fjustlaravel\u002Fhow-to-implement-datatables-in-laravel-de200c8d4467",
                "latestPublishedVersion": "b173fbc340bf",
                "postResponses": {
                    "__typename": "PostResponses",
                    "count": 3
                },
                "allowResponses": true,
                "isLimitedState": false,
                "voterCount": 16,
                "recommenders": [],
                "title": "How to implement datatables in laravel",
                "clapCount": 39,
                "statusForCollection": "APPROVED",
                "pinnedAt": 0,
                "pinnedByCreatorAt": 0,
                "curationEligibleAt": 0,
                "responseDistribution": "NOT_DISTRIBUTED",
                "inResponseToPostResult": null,
                "inResponseToCatalogResult": null,
                "pendingCollection": null,
                "isNewsletter": false,
                "isAuthorNewsletter": false,
                "layerCake": 0,
                "tags": [{
                    "__ref": "Tag:javascript"
                }, {
                    "__ref": "Tag:laravel"
                }, {
                    "__ref": "Tag:php"
                }, {
                    "__ref": "Tag:datatables"
                }, {
                    "__ref": "Tag:jquery"
                }],
                "topics": [{
                    "__typename": "Topic",
                    "name": "Programming"
                }],
                "sequence": null,
                "readingTime": 5.874842767295597,
                "inResponseToEntityType": null,
                "isSeries": false,
                "uniqueSlug": "how-to-implement-datatables-in-laravel-de200c8d4467",
                "primaryTopic": null,
                "socialTitle": "",
                "socialDek": "",
                "noIndex": null,
                "curationStatus": "CURATION_STATUS_DISABLED",
                "metaDescription": "",
                "latestPublishedAt": 1570008235019,
                "previewContent": {
                    "__typename": "PreviewContent",
                    "subtitle": "Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for…"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:0*jHRjgulo5b4m2WJK.png"
                },
                "isShortform": false,
                "seoTitle": "",
                "updatedAt": 1570009077625,
                "shortformType": "SHORTFORM_TYPE_LINK",
                "seoDescription": "",
                "isIndexable": true,
                "isSuspended": false,
                "responseRootPost": {
                    "__typename": "ResponseRootPost",
                    "post": {
                        "__ref": "Post:de200c8d4467"
                    }
                },
                "internalLinks({\"paging\":{\"limit\":8}})": {
                    "__typename": "InternalLinksConnection",
                    "items": [{
                        "__ref": "Post:cd07e431a8b"
                    }, {
                        "__ref": "Post:414cc5a90d27"
                    }, {
                        "__ref": "Post:253d2f1150e3"
                    }, {
                        "__ref": "Post:4aa61f0088d2"
                    }, {
                        "__ref": "Post:e03a4d8618c"
                    }, {
                        "__ref": "Post:3ec15827cb1c"
                    }, {
                        "__ref": "Post:3432586daeef"
                    }, {
                        "__ref": "Post:8e966a046c98"
                    }]
                },
                "awards:countToShowAwardBadge(type:STAFF_PICK,limit:1)": {
                    "__typename": "AwardConnection",
                    "totalCount": 0,
                    "awards": []
                }
            },
            "ImageMetadata:1*g8pXMAd262UQAqn9VPgvZg.png": {
                "__typename": "ImageMetadata",
                "id": "1*g8pXMAd262UQAqn9VPgvZg.png"
            },
            "ImageMetadata:1*9xf160j9CDRmffQXL_qdDQ.png": {
                "__typename": "ImageMetadata",
                "id": "1*9xf160j9CDRmffQXL_qdDQ.png",
                "originalWidth": 1500,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "ImageMetadata:1*G95ykj227pbelPTDsCd6BA.jpeg": {
                "__typename": "ImageMetadata",
                "id": "1*G95ykj227pbelPTDsCd6BA.jpeg",
                "originalHeight": 400,
                "originalWidth": 400
            },
            "Post:3b6640613218": {
                "__typename": "Post",
                "id": "3b6640613218"
            },
            "Paragraph:b173fbc340bf_0": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_0",
                "name": "20e9",
                "type": "H3",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "How to implement datatables in laravel",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_1": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_1",
                "name": "4ed0",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Hello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is jQuery plugin for table extender, it provides the functionalities like search, sort, pagination on a table of information to handle the data more effectively. Earlier we implemented search, pagination, pagination on search results individually without using any plugins, here we will do it using datatables plugin.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 300,
                    "end": 306,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fsearch-functionality-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 308,
                    "end": 318,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fusing-pagination-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 320,
                    "end": 348,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fpaginated-data-search-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_2": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_2",
                "name": "2ee0",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "There are also a similar table extender plugins like datatables and bootgrid is one of them, a post on implementing bootgrid is also available here.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 68,
                    "end": 77,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fusing-bootgrid-plugin-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 116,
                    "end": 125,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fdemos\u002Fusing-bootgrid-plugin-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 143,
                    "end": 147,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fusing-bootgrid-plugin-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_3": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_3",
                "name": "b5d9",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Here we used the basic initialisation of datatables, i made another post on implementing datatables server side, i recommend you to have a look at it here.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 89,
                    "end": 111,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fimplement-datatables-server-side-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 150,
                    "end": 154,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fimplement-datatables-server-side-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_4": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_4",
                "name": "8a6f",
                "type": "H3",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 1 : Initializing datatables",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_5": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_5",
                "name": "150c",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Lets include the required bootstrap, datatables js and css files along with jquery,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_6": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_6",
                "name": "1a62",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "\u003Cscript src=\"\u002F\u002Fcode.jquery.com\u002Fjquery-1.12.3.js\"\u003E\u003C\u002Fscript\u003E\n\u003Cscript src=\"\u002F\u002Fcdn.datatables.net\u002F1.10.12\u002Fjs\u002Fjquery.dataTables.min.js\"\u003E\u003C\u002Fscript\u003E\n\u003Cscript\n    src=\"https:\u002F\u002Fcdn.datatables.net\u002F1.10.12\u002Fjs\u002FdataTables.bootstrap.min.js\"\u003E\u003C\u002Fscript\u003E\n\u003Clink rel=\"stylesheet\"\n    href=\"\u002F\u002Fmaxcdn.bootstrapcdn.com\u002Fbootstrap\u002F3.3.6\u002Fcss\u002Fbootstrap.min.css\"\u003E\n\u003Clink rel=\"stylesheet\"\n    href=\"https:\u002F\u002Fcdn.datatables.net\u002F1.10.12\u002Fcss\u002FdataTables.bootstrap.min.css\"\u003E",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_7": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_7",
                "name": "393a",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "We show the data in a table so lets create the table we require,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_8": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_8",
                "name": "7f97",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "\u003Ctable class=\"table\" id=\"table\"\u003E\n    \u003Cthead\u003E\n        \u003Ctr\u003E\n            \u003Cth class=\"text-center\"\u003E#\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003EFirst Name\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003ELast Name\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003EEmail\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003EGender\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003ECountry\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003ESalary ($)\u003C\u002Fth\u003E\n            \u003Cth class=\"text-center\"\u003EActions\u003C\u002Fth\u003E\n        \u003C\u002Ftr\u003E\n    \u003C\u002Fthead\u003E\n    \u003Ctbody\u003E\n        \u003Ctr\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n            \u003Ctd\u003E\u003C\u002Ftd\u003E\n        \u003C\u002Ftr\u003E\n    \u003C\u002Ftbody\u003E\n\u003C\u002Ftable\u003E",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_9": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_9",
                "name": "1859",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Note that the table above has an id id=\"table\" we use that id to initiate datatables,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 36,
                    "end": 46,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_10": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_10",
                "name": "bd77",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "\u003Cscript\u003E\n  $(document).ready(function() {\n    $('#table').DataTable();\n} );\n \u003C\u002Fscript\u003E",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_11": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_11",
                "name": "8753",
                "type": "H3",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 2 : Fetching data from database",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_12": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_12",
                "name": "fff0",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "We collect some fake data from mockaroo.com and store it in our database, the table consists of id, first_name, last_name, email, gender, country and salary fields. The sql file can be found here.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_13": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_13",
                "name": "4bb9",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Now we set up the database connection details in \u002F.env file or in \u002Fconfig\u002Fdatabase.php with appropriate details. for reference post on database set up look here.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 156,
                    "end": 160,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Flaravel-database-setup\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_14": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_14",
                "name": "336c",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Now we create a model file for accessing the data in the database, running the following command will create a model file with the given name at \u002Fapp\u002FData.php.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_15": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_15",
                "name": "e690",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "php artisan make:model Data",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_16": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_16",
                "name": "a728",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "place the following code in it,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_17": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_17",
                "name": "87a6",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "\u003C?php",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_18": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_18",
                "name": "875d",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "namespace App;",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_19": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_19",
                "name": "14e8",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "use Illuminate\\Database\\Eloquent\\Model;",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_20": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_20",
                "name": "24b7",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "class Data extends Model\n{\n    protected $table=\"datatables_data\";\n}",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_21": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_21",
                "name": "e0fa",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "now our model is ready, we can now fetch the data from it and pass that data to the view created above,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_22": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_22",
                "name": "1e0d",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "So in routes\u002Fweb.php file, place the following code to fetch all the data from the table,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_23": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_23",
                "name": "565b",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Route::get ( '\u002F', function () {\n    $data = Data::all ();\n    return view ( 'welcome' )-\u003EwithData ( $data );\n} );",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_24": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_24",
                "name": "bb17",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 3 : Showing the data",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_25": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_25",
                "name": "ae1e",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "In the previous step we pass a variable $data to the view, it contains all the data we needed, so the view file where we created a table, we show this data in those \u003Ctd\u003E elements.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 40,
                    "end": 45,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 165,
                    "end": 169,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_26": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_26",
                "name": "7617",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "edit the view file as follows,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_27": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_27",
                "name": "9d8f",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "\u003Ctbody\u003E\n@foreach($data as $item)\n\u003Ctr class=\"item{{$item-\u003Eid}}\"\u003E\n    \u003Ctd\u003E{{$item-\u003Eid}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Efirst_name}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Elast_name}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Eemail}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Egender}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Ecountry}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E{{$item-\u003Esalary}}\u003C\u002Ftd\u003E\n    \u003Ctd\u003E\u003Cbutton class=\"edit-modal btn btn-info\"\n            data-info=\"{{$item-\u003Eid}},{{$item-\u003Efirst_name}},{{$item-\u003Elast_name}},{{$item-\u003Eemail}},{{$item-\u003Egender}},{{$item-\u003Ecountry}},{{$item-\u003Esalary}}\"\u003E\n            \u003Cspan class=\"glyphicon glyphicon-edit\"\u003E\u003C\u002Fspan\u003E Edit\n        \u003C\u002Fbutton\u003E\n        \u003Cbutton class=\"delete-modal btn btn-danger\"\n            data-info=\"{{$item-\u003Eid}},{{$item-\u003Efirst_name}},{{$item-\u003Elast_name}},{{$item-\u003Eemail}},{{$item-\u003Egender}},{{$item-\u003Ecountry}},{{$item-\u003Esalary}}\"\u003E\n            \u003Cspan class=\"glyphicon glyphicon-trash\"\u003E\u003C\u002Fspan\u003E Delete\n        \u003C\u002Fbutton\u003E\u003C\u002Ftd\u003E\n\u003C\u002Ftr\u003E\n@endforeach\n\u003C\u002Ftbody\u003E",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_28": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_28",
                "name": "c358",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "We looped the $data variable and displayed all the results in the table.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 14,
                    "end": 19,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "ImageMetadata:0*jHRjgulo5b4m2WJK.png": {
                "__typename": "ImageMetadata",
                "id": "0*jHRjgulo5b4m2WJK.png",
                "originalHeight": 524,
                "originalWidth": 1024,
                "focusPercentX": null,
                "focusPercentY": null,
                "alt": "Datatables implementation in laravel - justlaravel.com"
            },
            "Paragraph:b173fbc340bf_29": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_29",
                "name": "6502",
                "type": "IMG",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": {
                    "__ref": "ImageMetadata:0*jHRjgulo5b4m2WJK.png"
                },
                "text": "Datatables implementation in laravel — justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_30": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_30",
                "name": "5bbf",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 4 : Deleting and Editing (the laravel part)",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_31": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_31",
                "name": "cb7e",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "As we see in the table the last column ‘Actions’ with edit and delete options..\nWe have two buttons for edit and delete, when clicked on those a modal will pop up showing the details and asking us to edit and delete the details in that row.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_32": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_32",
                "name": "f43e",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "We use only one modal for editing and deleting purpose, as we did in previous tutorial about ajax crud operations, almost the same code we use here too, but with some extra fields in the edit modal form.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 69,
                    "end": 86,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fajax-crud-operations-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "A",
                    "start": 93,
                    "end": 113,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fajax-crud-operations-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_33": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_33",
                "name": "d822",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 4.1 : Edit Modal",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_34": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_34",
                "name": "717d",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "So when edit button in action column is clicked, we will adjust the only modal with appropriate buttons and actions like name of the button in the modal, content in the modal.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_35": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_35",
                "name": "8afb",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "following is the code executed when edit button is clicked,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_36": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_36",
                "name": "50b2",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "$(document).on('click', '.edit-modal', function() {\n        $('#footer_action_button').text(\" Update\");\n        $('#footer_action_button').addClass('glyphicon-check');\n        $('#footer_action_button').removeClass('glyphicon-trash');\n        $('.actionBtn').addClass('btn-success');\n        $('.actionBtn').removeClass('btn-danger');\n        $('.actionBtn').removeClass('delete');\n        $('.actionBtn').addClass('edit');\n        $('.modal-title').text('Edit');\n        $('.deleteContent').hide();\n        $('.form-horizontal').show();\n        var stuff = $(this).data('info').split(',');\n        fillmodalData(stuff)\n        $('#myModal').modal('show');\n    });",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_37": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_37",
                "name": "0d9e",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Here we used a function fillmodalData() function to get the details of that particular row, the button's data attribute contains all the info about that row so we use this inf and set them in the modal,",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 24,
                    "end": 39,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_38": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_38",
                "name": "f776",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "function fillmodalData(details){\n    $('#fid').val(details[0]);\n    $('#fname').val(details[1]);\n    $('#lname').val(details[2]);\n    $('#email').val(details[3]);\n    $('#gender').val(details[4]);\n    $('#country').val(details[5]);\n    $('#salary').val(details[6]);\n}",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_39": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_39",
                "name": "8030",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "After the modal is shown, we can edit the data, then the data is saved after passing all the validation rules.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_40": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_40",
                "name": "9311",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "$('.modal-footer').on('click', '.edit', function() {\n        $.ajax({\n            type: 'post',\n            url: '\u002FeditItem',\n            data: {\n                '_token': $('input[name=_token]').val(),\n                'id': $(\"#fid\").val(),\n                'fname': $('#fname').val(),\n                'lname': $('#lname').val(),\n                'email': $('#email').val(),\n                'gender': $('#gender').val(),\n                'country': $('#country').val(),\n                'salary': $('#salary').val()\n            },\n            success: function(data) {\n                if (data.errors){\n                    $('#myModal').modal('show');\n                    if(data.errors.fname) {\n                        $('.fname_error').removeClass('hidden');\n                        $('.fname_error').text(\"First name can't be empty !\");\n                    }\n                    if(data.errors.lname) {\n                        $('.lname_error').removeClass('hidden');\n                        $('.lname_error').text(\"Last name can't be empty !\");\n                    }\n                    if(data.errors.email) {\n                        $('.email_error').removeClass('hidden');\n                        $('.email_error').text(\"Email must be a valid one !\");\n                    }\n                    if(data.errors.country) {\n                        $('.country_error').removeClass('hidden');\n                        $('.country_error').text(\"Country must be a valid one !\");\n                    }\n                    if(data.errors.salary) {\n                        $('.salary_error').removeClass('hidden');\n                        $('.salary_error').text(\"Salary must be a valid format ! (ex: #.##)\");\n                    }\n                }\n                 else {\n                     \n                     $('.error').addClass('hidden');\n                $('.item' + data.id).replaceWith(\"\u003Ctr class='item\" + data.id + \"'\u003E\u003Ctd\u003E\" +\n                        data.id + \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" + data.first_name +\n                        \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" + data.last_name + \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" + data.email + \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" +\n                         data.gender + \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" + data.country + \"\u003C\u002Ftd\u003E\u003Ctd\u003E\" + data.salary +\n                          \"\u003C\u002Ftd\u003E\u003Ctd\u003E\u003Cbutton class='edit-modal btn btn-info' data-info='\" + data.id+\",\"+data.first_name+\",\"+data.last_name+\",\"+data.email+\",\"+data.gender+\",\"+data.country+\",\"+data.salary+\"'\u003E\u003Cspan class='glyphicon glyphicon-edit'\u003E\u003C\u002Fspan\u003E Edit\u003C\u002Fbutton\u003E \u003Cbutton class='delete-modal btn btn-danger' data-info='\" + data.id+\",\"+data.first_name+\",\"+data.last_name+\",\"+data.email+\",\"+data.gender+\",\"+data.country+\",\"+data.salary+\"' \u003E\u003Cspan class='glyphicon glyphicon-trash'\u003E\u003C\u002Fspan\u003E Delete\u003C\u002Fbutton\u003E\u003C\u002Ftd\u003E\u003C\u002Ftr\u003E\");",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_41": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_41",
                "name": "2cb6",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "}}\n        });\n    });",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "ImageMetadata:0*lFj--MhHLwv4-IVg.png": {
                "__typename": "ImageMetadata",
                "id": "0*lFj--MhHLwv4-IVg.png",
                "originalHeight": 581,
                "originalWidth": 669,
                "focusPercentX": null,
                "focusPercentY": null,
                "alt": "Datatables implementation in laravel - justlaravel.com"
            },
            "Paragraph:b173fbc340bf_42": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_42",
                "name": "4c80",
                "type": "IMG",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": {
                    "__ref": "ImageMetadata:0*lFj--MhHLwv4-IVg.png"
                },
                "text": "Datatables implementation in laravel — justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_43": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_43",
                "name": "6797",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Basically when update button is clicked, it is routed to ajax call \u002Feditdata, it checks for validations, throws errors if validator fails or it saves the data in database. So in the success function of the ajax call first check for errors, if any we display them appropriately or replace the row with new data.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 67,
                    "end": 76,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_44": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_44",
                "name": "f2aa",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Edit action :",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_45": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_45",
                "name": "30ae",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Route::post ( '\u002FeditItem', function (Request $request) {\n    \n    $rules = array (\n            'fname' =\u003E 'required|alpha',\n            'lname' =\u003E 'required|alpha',\n            'email' =\u003E 'required|email',\n            'gender' =\u003E 'required',\n            'country' =\u003E 'required|regex:\u002F^[\\pL\\s\\-]+$\u002Fu',\n            'salary' =\u003E 'required|regex:\u002F^\\d*(\\.\\d{2})?$\u002F' \n    );\n    $validator = Validator::make ( Input::all (), $rules );\n    if ($validator-\u003Efails ())\n        return Response::json ( array (             \n                'errors' =\u003E $validator-\u003EgetMessageBag ()-\u003EtoArray () \n        ) );\n    else {\n        \n        $data = Data::find ( $request-\u003Eid );\n        $data-\u003Efirst_name = ($request-\u003Efname);\n        $data-\u003Elast_name = ($request-\u003Elname);\n        $data-\u003Eemail = ($request-\u003Eemail);\n        $data-\u003Egender = ($request-\u003Egender);\n        $data-\u003Ecountry = ($request-\u003Ecountry);\n        $data-\u003Esalary = ($request-\u003Esalary);\n        $data-\u003Esave ();\n        return response ()-\u003Ejson ( $data );\n    }\n} );",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "ImageMetadata:0*gNFvrC9roJE32S1p.png": {
                "__typename": "ImageMetadata",
                "id": "0*gNFvrC9roJE32S1p.png",
                "originalHeight": 623,
                "originalWidth": 639,
                "focusPercentX": null,
                "focusPercentY": null,
                "alt": "Datatables implementation in laravel - justlaravel.com"
            },
            "Paragraph:b173fbc340bf_46": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_46",
                "name": "57cc",
                "type": "IMG",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": {
                    "__ref": "ImageMetadata:0*gNFvrC9roJE32S1p.png"
                },
                "text": "Datatables implementation in laravel — justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "ImageMetadata:0*ud5kZloy7l8i-bPS.png": {
                "__typename": "ImageMetadata",
                "id": "0*ud5kZloy7l8i-bPS.png",
                "originalHeight": 628,
                "originalWidth": 638,
                "focusPercentX": null,
                "focusPercentY": null,
                "alt": "Datatables implementation in laravel - justlaravel.com"
            },
            "Paragraph:b173fbc340bf_47": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_47",
                "name": "d865",
                "type": "IMG",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": {
                    "__ref": "ImageMetadata:0*ud5kZloy7l8i-bPS.png"
                },
                "text": "Datatables implementation in laravel — justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_48": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_48",
                "name": "9aed",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Step 4.2 : Delete Modal",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_49": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_49",
                "name": "079d",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "When delete button in actions column is clicked a modal pops up, asking for delete conformation.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_50": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_50",
                "name": "0202",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "$(document).on('click', '.delete-modal', function() {\n        $('#footer_action_button').text(\" Delete\");\n        $('#footer_action_button').removeClass('glyphicon-check');\n        $('#footer_action_button').addClass('glyphicon-trash');\n        $('.actionBtn').removeClass('btn-success');\n        $('.actionBtn').addClass('btn-danger');\n        $('.actionBtn').removeClass('edit');\n        $('.actionBtn').addClass('delete');\n        $('.modal-title').text('Delete');\n        $('.deleteContent').show();\n        $('.form-horizontal').hide();\n        var stuff = $(this).data('info').split(',');\n        $('.did').text(stuff[0]);\n        $('.dname').html(stuff[1] +\" \"+stuff[2]);\n        $('#myModal').modal('show');\n    });",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_51": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_51",
                "name": "0e0b",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "When delete is clicked in the modal it is routed to ajax call \u002FdeleteData, which deletes the data from the database and updates the view.",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "CODE",
                    "start": 62,
                    "end": 73,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_52": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_52",
                "name": "8130",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "$('.modal-footer').on('click', '.delete', function() {\n        $.ajax({\n            type: 'post',\n            url: '\u002FdeleteItem',\n            data: {\n                '_token': $('input[name=_token]').val(),\n                'id': $('.did').text()\n            },\n            success: function(data) {\n                $('.item' + $('.did').text()).remove();\n            }\n        });\n    });",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_53": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_53",
                "name": "cf64",
                "type": "H4",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Delete action :",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_54": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_54",
                "name": "c5b3",
                "type": "PRE",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Route::post ( '\u002FdeleteItem', function (Request $request) {\n    Data::find ( $request-\u003Eid )-\u003Edelete ();\n    return response ()-\u003Ejson ();\n} );",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "ImageMetadata:0*BXHz4Y0qKTb4_GnK.png": {
                "__typename": "ImageMetadata",
                "id": "0*BXHz4Y0qKTb4_GnK.png",
                "originalHeight": 214,
                "originalWidth": 633,
                "focusPercentX": null,
                "focusPercentY": null,
                "alt": "Datatables implementation in laravel - justlaravel.com"
            },
            "Paragraph:b173fbc340bf_55": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_55",
                "name": "4d96",
                "type": "IMG",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": {
                    "__ref": "ImageMetadata:0*BXHz4Y0qKTb4_GnK.png"
                },
                "text": "Datatables implementation in laravel — justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_56": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_56",
                "name": "b6cd",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Server side implementation of datatables : \nhttp:\u002F\u002Fjustlaravel.com\u002Fimplement-datatables-server-side-laravel\u002F",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "EM",
                    "start": 0,
                    "end": 40,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_57": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_57",
                "name": "f761",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Post: http:\u002F\u002Fjustlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 6,
                    "end": 68,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_58": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_58",
                "name": "8038",
                "type": "MIXTAPE_EMBED",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "How to implement datatables in laravel - Just Laravel\nHello readers, am back with another post to let you know how to implement datatables plugin in laravel. Datatables is…justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 0,
                    "end": 187,
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "STRONG",
                    "start": 0,
                    "end": 53,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "EM",
                    "start": 54,
                    "end": 172,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": {
                    "__typename": "MixtapeMetadata",
                    "href": "http:\u002F\u002Fjustlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "mediaResource": {
                        "__typename": "MediaResource",
                        "mediumCatalog": null
                    },
                    "thumbnailImageId": "0*gijjl-9UtIATiNnX."
                }
            },
            "Paragraph:b173fbc340bf_59": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_59",
                "name": "0b34",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "YouTube: https:\u002F\u002Fwww.youtube.com\u002Fwatch?v=UJuqiUWGHus",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 9,
                    "end": 52,
                    "href": "https:\u002F\u002Fwww.youtube.com\u002Fwatch?v=UJuqiUWGHus",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "MediaResource:e97637d6e143d5281a745fc41f6d8915": {
                "__typename": "MediaResource",
                "id": "e97637d6e143d5281a745fc41f6d8915",
                "iframeSrc": "https:\u002F\u002Fcdn.embedly.com\u002Fwidgets\u002Fmedia.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FUJuqiUWGHus%3Ffeature%3Doembed&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DUJuqiUWGHus&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FUJuqiUWGHus%2Fhqdefault.jpg&key=a19fcc184b9711e1b4764040d3dc5c07&type=text%2Fhtml&schema=youtube",
                "iframeHeight": 480,
                "iframeWidth": 854,
                "title": "How to implement datatables plugin in laravel"
            },
            "Paragraph:b173fbc340bf_60": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_60",
                "name": "fda8",
                "type": "IFRAME",
                "href": null,
                "layout": "INSET_CENTER",
                "metadata": null,
                "text": "",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [],
                "iframe": {
                    "__typename": "Iframe",
                    "mediaResource": {
                        "__ref": "MediaResource:e97637d6e143d5281a745fc41f6d8915"
                    }
                },
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_61": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_61",
                "name": "2093",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "GitHub: https:\u002F\u002Fgithub.com\u002Favinashn\u002Fdatatables-implementation-laravel",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 8,
                    "end": 69,
                    "href": "https:\u002F\u002Fgithub.com\u002Favinashn\u002Fdatatables-implementation-laravel",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_62": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_62",
                "name": "ea1b",
                "type": "MIXTAPE_EMBED",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "avinashn\u002Fdatatables-implementation-laravel\ndatatables-implementation-laravel - An example of integrating jQuery datatables plugin in laravel.github.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 0,
                    "end": 151,
                    "href": "https:\u002F\u002Fgithub.com\u002Favinashn\u002Fdatatables-implementation-laravel",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "STRONG",
                    "start": 0,
                    "end": 42,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "EM",
                    "start": 43,
                    "end": 141,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": {
                    "__typename": "MixtapeMetadata",
                    "href": "https:\u002F\u002Fgithub.com\u002Favinashn\u002Fdatatables-implementation-laravel",
                    "mediaResource": {
                        "__typename": "MediaResource",
                        "mediumCatalog": null
                    },
                    "thumbnailImageId": "0*YKaUK54gfZtBDgAC."
                }
            },
            "Paragraph:b173fbc340bf_63": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_63",
                "name": "8245",
                "type": "P",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Working Demo: http:\u002F\u002Fdemos.justlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 14,
                    "end": 82,
                    "href": "http:\u002F\u002Fdemos.justlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": null
            },
            "Paragraph:b173fbc340bf_64": {
                "__typename": "Paragraph",
                "id": "b173fbc340bf_64",
                "name": "0a1d",
                "type": "MIXTAPE_EMBED",
                "href": null,
                "layout": null,
                "metadata": null,
                "text": "Datatables implementation in laravel - justlaravel.com\nThis is a live demo of the application implementing datatables plugin in laravel which is described in this post. how…demos.justlaravel.com",
                "hasDropCap": null,
                "dropCapImage": null,
                "markups": [{
                    "__typename": "Markup",
                    "type": "A",
                    "start": 0,
                    "end": 194,
                    "href": "http:\u002F\u002Fdemos.justlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "anchorType": "LINK",
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "STRONG",
                    "start": 0,
                    "end": 54,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }, {
                    "__typename": "Markup",
                    "type": "EM",
                    "start": 55,
                    "end": 173,
                    "href": null,
                    "anchorType": null,
                    "userId": null,
                    "linkMetadata": null
                }],
                "iframe": null,
                "mixtapeMetadata": {
                    "__typename": "MixtapeMetadata",
                    "href": "http:\u002F\u002Fdemos.justlaravel.com\u002Fhow-to-implement-datatables-in-laravel\u002F",
                    "mediaResource": {
                        "__typename": "MediaResource",
                        "mediumCatalog": null
                    },
                    "thumbnailImageId": ""
                }
            },
            "CollectionViewerEdge:collectionId:6a4ff95f590f-viewerId:lo_50d3d376743a": {
                "__typename": "CollectionViewerEdge",
                "id": "collectionId:6a4ff95f590f-viewerId:lo_50d3d376743a",
                "isEditor": false
            },
            "Tag:javascript": {
                "__typename": "Tag",
                "id": "javascript"
            },
            "Tag:laravel": {
                "__typename": "Tag",
                "id": "laravel"
            },
            "Tag:php": {
                "__typename": "Tag",
                "id": "php"
            },
            "Tag:datatables": {
                "__typename": "Tag",
                "id": "datatables"
            },
            "Tag:jquery": {
                "__typename": "Tag",
                "id": "jquery"
            },
            "User:2dcb9bf00f7a": {
                "__typename": "User",
                "id": "2dcb9bf00f7a",
                "imageId": "1*6F2n4vDuOTIRn5eY5vxy1w.jpeg",
                "mediumMemberAt": 0,
                "name": "Meta Septiana S",
                "username": "metaseptiana2",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": ""
            },
            "ImageMetadata:1*-Jpo9T2q4qj6deFUbSHcag.png": {
                "__typename": "ImageMetadata",
                "id": "1*-Jpo9T2q4qj6deFUbSHcag.png",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:cd07e431a8b": {
                "__typename": "Post",
                "id": "cd07e431a8b",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "Test case is a stage for testing features or functions of a software with a particular template according to the needs of the tester. The…"
                },
                "collection": null,
                "title": "HOW TO MAKE A GOOD TEST CASE",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@metaseptiana2\u002Fhow-to-make-a-good-test-case-cd07e431a8b",
                "creator": {
                    "__ref": "User:2dcb9bf00f7a"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*-Jpo9T2q4qj6deFUbSHcag.png"
                },
                "clapCount": 0,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "how-to-make-a-good-test-case-cd07e431a8b"
            },
            "User:9568bba00680": {
                "__typename": "User",
                "id": "9568bba00680",
                "imageId": "1*sm6TwPq7zU09Ai9Dxyi91w@2x.jpeg",
                "mediumMemberAt": 0,
                "name": "Eyvaz Ahmadzada",
                "username": "eyvazahmadzada",
                "customDomainState": {
                    "__typename": "CustomDomainState",
                    "live": {
                        "__typename": "CustomDomain",
                        "domain": "eyvazahmadzada.medium.com"
                    }
                },
                "hasSubdomain": true,
                "bio": "Highly motivated third-year computer science student at French-Azerbaijani University"
            },
            "ImageMetadata:1*M0_44H1c2GG4uAz9WkRL1g.png": {
                "__typename": "ImageMetadata",
                "id": "1*M0_44H1c2GG4uAz9WkRL1g.png",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:414cc5a90d27": {
                "__typename": "Post",
                "id": "414cc5a90d27",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "The third week of my GSoC journey with Joomla! is already over. This week was devoted to improving the existing features rather than adding…"
                },
                "collection": null,
                "title": "My GSoC Journey: Week 3",
                "mediumUrl": "https:\u002F\u002Feyvazahmadzada.medium.com\u002Fmy-gsoc-journey-week-3-414cc5a90d27",
                "creator": {
                    "__ref": "User:9568bba00680"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*M0_44H1c2GG4uAz9WkRL1g.png"
                },
                "clapCount": 0,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "my-gsoc-journey-week-3-414cc5a90d27"
            },
            "User:d481d7138cac": {
                "__typename": "User",
                "id": "d481d7138cac",
                "imageId": "1*zw7UIw4L5IaairamRvM73Q.jpeg",
                "mediumMemberAt": 0,
                "name": "Nithin Rajan",
                "username": "nithin_rajan",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": "AI \u002F ML OPS Modelling Engineer — R&D Department"
            },
            "ImageMetadata:1*m6rDSK-R3yjcFOJel8ZAFQ.png": {
                "__typename": "ImageMetadata",
                "id": "1*m6rDSK-R3yjcFOJel8ZAFQ.png",
                "alt": "png",
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:253d2f1150e3": {
                "__typename": "Post",
                "id": "253d2f1150e3",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "(A) DATA ACQUISITION"
                },
                "collection": null,
                "title": "Web Scrapping — Amazon, Big Basket, Flip Kart, Dmart",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@nithin_rajan\u002Fweb-scrapping-amazon-big-basket-flip-kart-dmart-253d2f1150e3",
                "creator": {
                    "__ref": "User:d481d7138cac"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*m6rDSK-R3yjcFOJel8ZAFQ.png"
                },
                "clapCount": 17,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "web-scrapping-amazon-big-basket-flip-kart-dmart-253d2f1150e3"
            },
            "Collection:3a8144eabfe3": {
                "__typename": "Collection",
                "id": "3a8144eabfe3",
                "slug": "hackernoon",
                "name": "HackerNoon.com",
                "domain": null
            },
            "User:c7899df0cba0": {
                "__typename": "User",
                "id": "c7899df0cba0",
                "imageId": "1*Bhm5scV5_fRehZv_AlRSeQ.jpeg",
                "mediumMemberAt": 0,
                "name": "Natasha from Hacker Noon",
                "username": "hackernoontech",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": "here to help tech professionals write & share the stories hackers want to read. run by @hackernoon’s managing editor, @itsnatashanel"
            },
            "ImageMetadata:1*W4OGDvFmENYuwv4VX8vjwQ.jpeg": {
                "__typename": "ImageMetadata",
                "id": "1*W4OGDvFmENYuwv4VX8vjwQ.jpeg",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:4aa61f0088d2": {
                "__typename": "Post",
                "id": "4aa61f0088d2",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "Below are the top 65 stories on Hacker Noon this month. We’ve curated them into these top categories: programming, blockchain, ux, careers…"
                },
                "collection": {
                    "__ref": "Collection:3a8144eabfe3"
                },
                "title": "April’s Most Read Tech Stories — 2019",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002Fhackernoon\u002Faprils-most-read-tech-stories-2019-4aa61f0088d2",
                "creator": {
                    "__ref": "User:c7899df0cba0"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*W4OGDvFmENYuwv4VX8vjwQ.jpeg"
                },
                "clapCount": 330,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "aprils-most-read-tech-stories-2019-4aa61f0088d2"
            },
            "User:b7ddf4bca166": {
                "__typename": "User",
                "id": "b7ddf4bca166",
                "imageId": "1*T9TPiuBNn7FOoPNxEczeYw.png",
                "mediumMemberAt": 0,
                "name": "JetRuby Agency",
                "username": "jetruby",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": "JetRuby is a Digital Agency that doesn’t stop moving. We expound on subjects as varied as developing a mobile app and through to disruptive technologies."
            },
            "ImageMetadata:0*_CuAgQAysYltX-ey.": {
                "__typename": "ImageMetadata",
                "id": "0*_CuAgQAysYltX-ey.",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:e03a4d8618c": {
                "__typename": "Post",
                "id": "e03a4d8618c",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "MOVE Shanghai allows you to have access to all the premium fitness venues in the area just from one single place. With its help, you can…"
                },
                "collection": null,
                "title": "MOVE Shanghai",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@jetruby\u002Fmove-shanghai-e03a4d8618c",
                "creator": {
                    "__ref": "User:b7ddf4bca166"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:0*_CuAgQAysYltX-ey."
                },
                "clapCount": 128,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "move-shanghai-e03a4d8618c"
            },
            "User:ee3cc1061fe2": {
                "__typename": "User",
                "id": "ee3cc1061fe2",
                "imageId": "1*KGD8w4osffjx7f9kySay-g.jpeg",
                "mediumMemberAt": 0,
                "name": "Betsy Nelson",
                "username": "betsy_48092",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": "IoT, Tech, DevOps writer for @madeby7pace. In my free time I rock climb and scroll to the end of the backlog."
            },
            "ImageMetadata:0*VnlB-7y5E5u5gAdd": {
                "__typename": "ImageMetadata",
                "id": "0*VnlB-7y5E5u5gAdd",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:3ec15827cb1c": {
                "__typename": "Post",
                "id": "3ec15827cb1c",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "If you really want to demoralize your engineering team and galvanize their distrust for time tracking and management, then you can use…"
                },
                "collection": null,
                "title": "Time Tracking is NOT a Band-Aid for Management or Trust Problems",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@betsy_48092\u002Ftime-tracking-is-not-a-band-aid-for-management-or-trust-problems-3ec15827cb1c",
                "creator": {
                    "__ref": "User:ee3cc1061fe2"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:0*VnlB-7y5E5u5gAdd"
                },
                "clapCount": 0,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "time-tracking-is-not-a-band-aid-for-management-or-trust-problems-3ec15827cb1c"
            },
            "User:783a4224e64c": {
                "__typename": "User",
                "id": "783a4224e64c",
                "imageId": "0*AalKpoeRNZPsgNkc",
                "mediumMemberAt": 0,
                "name": "Sumedh Kandadai",
                "username": "sumedhk24",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": ""
            },
            "ImageMetadata:1*1jifHB9eBJ8SeJ1GQnxo5w.jpeg": {
                "__typename": "ImageMetadata",
                "id": "1*1jifHB9eBJ8SeJ1GQnxo5w.jpeg",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:3432586daeef": {
                "__typename": "Post",
                "id": "3432586daeef",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "Blog #12"
                },
                "collection": null,
                "title": "CS371p Spring 2022 Week #12: Sumedh Kandadai",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@sumedhk24\u002Fcs371p-spring-2022-week-12-sumedh-kandadai-3432586daeef",
                "creator": {
                    "__ref": "User:783a4224e64c"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*1jifHB9eBJ8SeJ1GQnxo5w.jpeg"
                },
                "clapCount": 0,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "cs371p-spring-2022-week-12-sumedh-kandadai-3432586daeef"
            },
            "User:b084438a68fc": {
                "__typename": "User",
                "id": "b084438a68fc",
                "imageId": "0*U-XXypysoxnudz-n",
                "mediumMemberAt": 0,
                "name": "Kevin Hernandez",
                "username": "kevin.hernandez288",
                "customDomainState": null,
                "hasSubdomain": false,
                "bio": ""
            },
            "ImageMetadata:1*YHCjJWrZM5SCbgo4SfefsA.png": {
                "__typename": "ImageMetadata",
                "id": "1*YHCjJWrZM5SCbgo4SfefsA.png",
                "alt": null,
                "focusPercentX": null,
                "focusPercentY": null
            },
            "Post:8e966a046c98": {
                "__typename": "Post",
                "id": "8e966a046c98",
                "visibility": "PUBLIC",
                "previewContent": {
                    "__typename": "PreviewContent",
                    "isFullContent": false,
                    "subtitle": "What is it?\nEncoding is a way to interpret bytes (eight bits) into a single character. This is important for us as programmers to know how…"
                },
                "collection": null,
                "title": "What is Character encoding?",
                "mediumUrl": "https:\u002F\u002Fmedium.com\u002F@kevin.hernandez288\u002Fwhat-is-character-encoding-8e966a046c98",
                "creator": {
                    "__ref": "User:b084438a68fc"
                },
                "previewImage": {
                    "__ref": "ImageMetadata:1*YHCjJWrZM5SCbgo4SfefsA.png"
                },
                "clapCount": 1,
                "isSeries": false,
                "sequence": null,
                "uniqueSlug": "what-is-character-encoding-8e966a046c98"
            }
        }
    </script>
    <script>
        window.__MIDDLEWARE_STATE__ = {
            "session": {
                "xsrf": ""
            },
            "cache": {
                "cacheStatus": "DYNAMIC",
                "inDisabledExperiment": true
            }
        }
    </script>
    <script src="https://cdn-client.medium.com/lite/static/js/manifest.268f91e7.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/221.eb6d4e84.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/main.ef8d0abe.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/instrumentation.d4892e93.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/4800.e59c250c.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/7371.ba12399a.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/2837.8dbc5759.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/1969.f87f274c.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/AppLayout.6f40d124.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/reporting.bbdcaa9d.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/4270.c0f5b685.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/1752.a348f767.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/7794.9590314e.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/8316.18f2a6aa.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/4330.1bf9fad7.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/2981.c8b67800.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/3115.040ad7a7.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/5472.5f6d4371.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/4869.15af887a.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/9401.492bc814.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/2307.b2a54ca4.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/9442.5291e270.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/7070.4ba587c4.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/4483.0a43a5ce.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/210.1b33e4a9.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/864.f280c412.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/9841.1bb423da.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/1681.08ba3d39.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/1018.d5a0e022.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/9304.0cb94a81.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/763.3dd24340.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/8051.c536c001.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/334.1987698a.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/251.80d522dd.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/5754.6687b8d5.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/PostPage.MainContent.fd6ffcc5.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/1987.e87f9d80.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/8018.0b1f967f.chunk.js"></script>
    <script src="https://cdn-client.medium.com/lite/static/js/PostPage.RightColumnContent.68e0287c.chunk.js"></script>
    <script>
        window.main();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"747242253f8ed245","token":"0b5f665943484354a59c39c6833f7078","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
</body>

</html>