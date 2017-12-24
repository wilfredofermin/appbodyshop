<style>
    div {
        /*box-sizing: border-box;*/
        outline-color: #ade3ff;
        outline-style: none;
    }

    /* Dropdowns - I */
    .dropdown .dropdown-toggle .down-arrow {
        display: inline-block;
        margin-top: 6px;
        margin-left:5px;
        width: 16px;
        height: 9px;
        background-image: url("http://www.htic.es/assets/down-arrow.png")
    }

    .dropdown .dropdown-toggle .caret {
        display: none;
    }

    .dropdown.open .down-arrow {
        behavior:url(-ms-transform.htc);
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
        transform: rotate(-180deg);
    }

    .dropdown button,
    .dropdown-menu {
        background-color: #f6f8f8;
    }

    .dropdown-menu {
        margin-top: 0px;
        background-color: #f6f8f8;
        border-radius: 0 0 0 0;
    }

    .dropdown-menu > li > a:hover {
        background-color: rgba(255, 255, 255, 1);
    }
    /* Dropdowns - F */

    div.clearfix {
        margin-top: 15px;
    }

    .ellipsis {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .margin-top-15 {
        margin-top: 15px;
    }

    /* ROBOTO FONT FACES - I */
    /* cyrillic-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/ek4gzZ-GeXAPcSbHtCeQI_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
    }
    /* cyrillic */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/mErvLBYg_cXG3rLvUsKT_fesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/-2n2p-_Y08sg57CNWQfKNvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+1F00-1FFF;
    }
    /* greek */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/u0TOpm082MNkS5K0Q4rhqvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
    }
    /* ROBOTO FONT FACES - F */

    /** General HTML style - I */
    /*@import url(http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900);*/

    body
    {
        font-family: 'Roboto', sans-serif;
        /*color: #B7C4CB;*/
        background-color: #F7F9F9;
        margin:0;
        padding:0;
        width: 100%;
        height: 100%;
    }

    body > div {
        margin-top: 10px;
    }

    a {
        /*font-size: 0.9em;*/
        color: #72B032;
        /*color: #86BB4F;*/
    }

    a, a:hover, a:focus, a:visited {
        text-decoration: none;
    }

    /** General HTML style - F */

    canvas {
        margin-bottom: 15px;
    }

    container {
        padding-bottom: 15px;
    }

    /*#monthDrop*/
    .dropdown button .btn-default {
        width:100%;
        border-color: red;
    }

    .balance {
        line-height: 1em;
        font-size:2.5em
    }

    .title {
        color: #a0aeb6;
        font-size: 1em;
        margin-bottom: 10px;
    }

    /** Rounded divs - I */
    div.rounded,
    div.top-rounded,
    div.bottom-rounded {
        border: solid 1px #dce1e5;
    }

    div.rounded {
        margin-bottom: 20px;
        -webkit-border-radius: 4px 4px 4px 4px;
        -moz-border-radius:  4px 4px 4px 4px;
        border-radius: 4px 4px 4px 4px;
    }

    div.top-rounded {
        -webkit-border-radius: 4px 4px 0px 0px;
        -moz-border-radius: 4px 4px 0px 0px;
        border-radius: 4px 4px 0px 0px;
    }

    div.bottom-rounded {
        border-top-style: none;
        -webkit-border-radius: 0px 0px 4px 4px;
        -moz-border-radius: 0px 0px 4px 4px;
        border-radius: 0px 0px 4px 4px;
    }
    /** Rounded divs - F */


    /** Dropdown draft - I */
    .dropdown span.caret {
        float:right;
        margin-top:8px;
    }

    .dropdown button {
        text-align: left;
    }

    .dropdown-menu {
        width: 100%;
    }
    /** Dropdown draft - F */

    /** Let tabls-left class be available in bootstrap 3.3.7 - I **/
    .tabs-left > .nav-tabs {
        border-bottom: 0;
    }

    .tab-content > .tab-pane {
        display: none;
    }

    .tab-content > .active {
        display: block;
    }

    .tabs-left > .nav-tabs > li {
        float: none;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-left > .nav-tabs > li > div {
        margin-right: 0;
        margin-bottom: 3px;
    }

    .tabs-left > .nav-tabs {
        float: left;
        margin-right: 19px;
        border-right: 1px solid #ddd;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-left > .nav-tabs > li > div {
        margin-right: -1px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .tabs-left > .nav-tabs > li > a:hover,
    .tabs-left > .nav-tabs > li > a:focus,
    .tabs-left > .nav-tabs > li > div:hover,
    .tabs-left > .nav-tabs > li > div:focus{
        border-color: #eeeeee #dddddd #eeeeee #eeeeee;
        background-color: #eeeeee;
    }

    .tabs-left > .nav-tabs .active > a,
    .tabs-left > .nav-tabs .active > a:hover,
    .tabs-left > .nav-tabs .active > a:focus,
    .tabs-left > .nav-tabs .active > div,
    .tabs-left > .nav-tabs .active > div:hover,
    .tabs-left > .nav-tabs .active > div:focus{
        border-color: #ddd transparent #ddd #ddd;
        *border-right-color: #ffffff;
    }
    /** Let tabls-left class be available in bootstrap 3.3.7 - F **/

    .account-type
    {
        font-family: 'Roboto', sans-serif;
        color: #A0AEB6;
        font-size: 1.3em;
        font-weight: bold;
        line-height: 18px;
    }

    .account-amount
    {
        font-family: 'Roboto', sans-serif;
        color: #A0AEB6;
        font-size: 1.1em;
        line-height: 16px;
    }

    .account-link
    {
        font-family: 'Roboto', sans-serif;
        font-size: 0.85em;
        /*line-height: 1em;*/
    }

    /* TABS */
    .tabs-left > .nav-tabs{
        margin-right:0px;
        padding: 0;
        height: 100%; /* 700px - Debe ser el mismo height que el que tenga .tab-content */
    }

    /* CONTENIDO DE LOS TABS */
    .tab-content {
        background-color: #FFFFFF;
        border:solid 1px #DCE1E5;
        border-left-style: none;
        height: 100%;
        margin-bottom: 15px;
        min-height: 700px;
        border-radius: 0px 4px 4px 4px;
        -moz-border-radius: 0px 4px 4px 4px;
        -webkit-border-radius: 0px 4px 4px 4px;

        -webkit-box-shadow: 0px 0px 18px 2px rgba(0,0,0,0.05);
        -moz-box-shadow: 0px 0px 18px 2px rgba(0,0,0,0.05);
        box-shadow: 0px 0px 18px 2px rgba(0,0,0,0.05);
    }

    .tab-content > div {
        margin-top: 26px;
    }

    /* Formato del tab activo */
    .tabs-left > .nav-tabs .active > a,
    .tabs-left > .nav-tabs .active > a:hover,
    .tabs-left > .nav-tabs .active > a:focus,

    .tabs-left > .nav-tabs .active div,
    .tabs-left > .nav-tabs .active div:hover,
    .tabs-left > .nav-tabs .active div:focus
    {
        background-color: #FFFFFF;

        border-bottom-style: none;
        border-left-style: none;

        /*border-bottom: 1px solid #DCE1E5;*/
        /*border-left: 1px solid #DCE1E5;*/
        border-bottom-left-radius: 0px;
        border-right-style: none;

        margin-right: -1px;

        -webkit-box-shadow: -4px 0px 18px -1px rgba(0,0,0,0.05);
        -moz-box-shadow: -4px 0px 18px -1px rgba(0,0,0,0.05);
        box-shadow: -4px 0px 18px -1px rgba(0,0,0,0.05);
    }

    /* Formato de los tabs en general */
    .tabs-left > .nav-tabs > li:nth-child(1) > a,
    .tabs-left > .nav-tabs > li:nth-child(1) > a:hover,
    .tabs-left > .nav-tabs > li:nth-child(1) > a:focus,

    .tabs-left > .nav-tabs > li:nth-child(1) > div,
    .tabs-left > .nav-tabs > li:nth-child(1) > div:hover,
    .tabs-left > .nav-tabs > li:nth-child(1) > div:focus
    {
        cursor: pointer;
        border-top-left-radius: 4px;
    }

    .tabs-left > .nav-tabs > li.active:nth-child(1) > a,
    .tabs-left > .nav-tabs > li.active:nth-child(1) > a:hover,
    .tabs-left > .nav-tabs > li.active:nth-child(1) > a:focus,

    .tabs-left > .nav-tabs > li.active:nth-child(1) > div,
    .tabs-left > .nav-tabs > li.active:nth-child(1) > div:hover,
    .tabs-left > .nav-tabs > li.active:nth-child(1) > div:focus
    {
        border-top-left-radius: 4px;
        border-bottom-style: none;
        border-left: 1px solid #DCE1E5;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-left > .nav-tabs > li > div {
        /*display:block;*/
        /*display: table;*/
        /*border: solid 1px transparent;*/
        margin-right: -1px;
        margin-bottom: -1px;
        border:solid 1px #DCE1E5;
        border-radius: 0px;
    }

    /* Style of the div element acting as tab content */
    .tabbable.tabs-left > .nav-tabs > li > div > div {
        display:block;
        width: 100%;
        padding: 1em;
        min-height: 6em;
    }

    /** For elements on the same line that jump down - I */
    @media (max-width: 767px) {
        .mt-20 {
            margin-top:20px;
        }

        .tab-content {
            border-left-style: solid;
            border-radius: 4px 4px 4px 4px;
            -moz-border-radius: 4px 4px 4px 4px;
            -webkit-border-radius: 4px 4px 4px 4px;
        }
    }
    /** For elements on the same line that jump down - F */
</style>