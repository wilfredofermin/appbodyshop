<style>
    .container {
        margin-top:0px;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Source Sans Pro';
        font-weight:700;
    }

    .fancyTab {
        text-align: center;
        padding:15px 0;
        background-color: #eee;
        box-shadow: 0 0 0 1px #ddd;
        top:15px;
        transition: top .2s;
    }

    .fancyTab.active {
        top:0;
        transition:top .2s;
    }

    .whiteBlock {
        display:none;
    }

    .fancyTab.active .whiteBlock {
        display:block;
        height:2px;
        bottom:-2px;
        background-color:#fff;
        width:99%;
        position:absolute;
        z-index:1;
    }

    .fancyTab a {
        font-family: 'font-family-serif';
        font-size:1.65em;
        font-weight:300;
        transition:.2s;
        color:#9C27B0;
    }

    /*.fancyTab .hidden-xs {
      white-space:nowrap;
    }*/

    .fancyTabs {
        border-bottom:2px solid #ddd;
        margin: 15px 0 0;
    }

    li.fancyTab a {
        padding-top: 15px;
        top:-15px;
        padding-bottom:0;
    }

    li.fancyTab.active a {
        padding-top: inherit;
    }

    .fancyTab .fa {
        font-size: 40px;
        width:100%;
        padding: 15px 0 5px;
        color:#666;
    }

    .fancyTab.active .fa {
        color: #9C27B0;
    }

    .fancyTab a:focus {
        outline:none;
    }

    .fancyTabContent {
        border-color: transparent;
        box-shadow: 0 -2px 0 -1px #9C27B0, 0 0 0 1px #ddd;
        padding: 30px 15px 15px;
        position:relative;
        background-color:#fff;
    }

    .nav-tabs > li.fancyTab.active > a,
    .nav-tabs > li.fancyTab.active > a:focus,
    .nav-tabs > li.fancyTab.active > a:hover {
        border-width:0;
    }

    .nav-tabs > li.fancyTab:hover {
        background-color:#f9f9f9;
        box-shadow: 0 0 0 1px #ddd;
    }

    .nav-tabs > li.fancyTab.active:hover {
        background-color:#fff;
        box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #9C27B0, -1px 1px 0 0px #ddd inset;
    }

    .nav-tabs > li.fancyTab:hover a {
        border-color:transparent;
    }

    .nav.nav-tabs .fancyTab a[data-toggle="tab"] {
        background-color:transparent;
        border-bottom:0;
    }

    .nav-tabs > li.fancyTab:hover a {
        border-right: 1px solid transparent;
    }

    .nav-tabs > li.fancyTab > a {
        margin-right:0;
        border-top:0;
        padding-bottom: 30px;
        margin-bottom: -30px;
    }

    .nav-tabs > li.fancyTab {
        margin-right:0;
        margin-bottom:0;
    }

    .nav-tabs > li.fancyTab:last-child a {
        border-right: 1px solid transparent;
    }

    .nav-tabs > li.fancyTab.active:last-child {
        border-right: 0px solid #ddd;
        box-shadow: 0px 2px 0 0px #9C27B0, 0px 0px 0 1px #ddd;
    }

    .fancyTab:last-child {
        box-shadow: 0 0 0 1px #ddd;
    }

    .tabs .nav-tabs li.fancyTab.active a {
        box-shadow:none;
        top:0;
    }


    .fancyTab.active {
        background: #fff;
        box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
        padding-bottom:30px;
    }

    .arrow-down {
        display:none;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 22px solid #9C27B0;
        position: absolute;
        top: -1px;
        left: calc(50% - 20px);
    }

    .arrow-down-inner {
        width: 0;
        height: 0;
        border-left: 18px solid transparent;
        border-right: 18px solid transparent;
        border-top: 12px solid #fff;
        position: absolute;
        top: -22px;
        left: -18px;
    }

    .fancyTab.active .arrow-down {
        display: block;
    }

    @media (max-width: 1440px) {

        .fancyTab .fa {
            font-size: 36px;
        }

        .fancyTab .hidden-xs {
            font-size:22px;
        }

    }


    @media (max-width: 1440px) {

        .fancyTab .fa {
            font-size: 33px;
        }

        .fancyTab .hidden-xs {
            font-size:18px;
            font-weight:normal;
        }

    }


    @media (max-width: 768px) {

        .fancyTab > a {
            font-size:18px;
        }

        .nav > li.fancyTab > a {
            padding:15px 0;
            margin-bottom:inherit;
        }

        .fancyTab .fa {
            font-size:30px;
        }

        .nav-tabs > li.fancyTab > a {
            border-right:1px solid transparent;
            padding-bottom:0;
        }

        .fancyTab.active .fa {
            color: #333;
        }

    }
</style>