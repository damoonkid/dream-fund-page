<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>ROCK 🎸</title>

    <style>
      * {
        box-sizing: border-box;
      }

      body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background: #4da2ff;
      }

      .rock {
        font-family: "Montserrat", sans-serif;
        font-size: 200px;
        margin: 0;
        color: #011829;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .hand {
        position: relative;
        width: 100px;
        height: 100px;
        -webkit-animation: rockit 0.8s ease infinite alternate;
        animation: rockit 0.8s ease infinite alternate;
      }

      .palm {
        width: 125px;
        height: 140px;
        background: #fedcca;
        transform: rotate(26deg);
        box-shadow: inset 0 0 50px #e77f7b;
      }
      .palm:after {
        content: "";
        background: #f2ada1;
        width: 20px;
        height: 30px;
        border-radius: 0 0 0 100%/50%;
        position: absolute;
        left: -20px;
        bottom: 25px;
        z-index: 5;
      }
      .palm:before {
        content: "";
        background-image: linear-gradient(-180deg, #e56c4c 0, #f68e60 100%);
        width: 100%;
        height: 30px;
        border-radius: 50%;
        position: absolute;
        left: 0;
        bottom: -15px;
      }

      .mobile {
        width: 260px;
        height: 135px;
        background: #fc617e;
        border: 4px solid #705674;
        border-width: 4px 10px 4px 10px;
        border-radius: 20px;
        position: absolute;
        top: -80px;
        left: 80%;
        transform: rotate(-5deg) translatex(-50%);
        z-index: 1;
        overflow: hidden;
      }

      .screensaver {
        width: 30px;
        height: 30px;
        background: transparent;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow:
          0 0 0 30px #eee,
          0 0 0 50px #d36868,
          0 0 0 70px #71d368,
          0 0 0 100px #68cfd3;
        -webkit-animation: screensaver 0.5s linear infinite;
        animation: screensaver 0.5s linear infinite;
      }

      .mobile-shadow {
        width: 100px;
        height: 50px;
        background: #c7656c;
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: rotate(-5deg) translatex(-40%);
        filter: blur(10px);
      }

      .finger {
        position: absolute;
        width: 45px;
        background: #fedcca;
        border-radius: 22px;
        box-shadow: inset 11px -17px 40px #e77f7b;
      }

      .finger-shadow {
        width: 35px;
        height: 50px;
        background: #c7656c;
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translatex(-50%);
        filter: blur(10px);
      }

      .finger-5 {
        height: 115px;
        top: -130px;
        left: -15px;
        transform: rotate(2deg);
      }

      .finger-4 {
        height: 90px;
        top: -100px;
        left: 30px;
        transform: rotate(-8deg);
        z-index: 1;
      }

      .finger-3 {
        height: 105px;
        top: -105px;
        left: 75px;
        transform: rotate(-8deg);
        z-index: 1;
      }

      .finger-2 {
        height: 120px;
        top: -165px;
        left: 120px;
        transform: rotate(15deg);
      }
      .finger-2 .finger-shadow {
        bottom: -5px;
      }

      .finger-1 {
        height: 100px;
        top: -10px;
        right: -50px;
        transform: rotate(-65deg);
        z-index: 1;
      }
      .finger-1 .fingernail {
        top: 10px;
        bottom: auto;
        transform: translatex(-50%) scale(-1);
      }

      .thumb-base {
        background-image: linear-gradient(-125deg, #e97e79 42%, #fdd8c7 77%);
        width: 42px;
        height: 85px;
        border-radius: 17px 20px 0 79px;
        position: absolute;
        top: 26px;
        right: -51px;
        transform: rotate(50deg);
      }

      .bone {
        width: 30px;
        height: 50px;
        border-radius: 50% 50% 0 0/20% 20% 0 0;
        background: #f5e5e9;
        position: absolute;
        bottom: -50px;
        left: 50%;
        z-index: 1;
        transform: translatex(-50%);
      }
      .bone:after,
      .bone:before {
        content: "";
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f5e5e9;
        box-shadow: inset 0 -5px 5px #ecd6da;
        position: absolute;
        bottom: -20px;
      }
      .bone:after {
        left: -20px;
      }
      .bone:before {
        right: -20px;
      }

      .fingernail {
        width: 30px;
        height: 25px;
        background: rgba(253, 253, 253, 0.3);
        box-shadow: 1px 1px #e5baa7;
        border-radius: 0 0 50% 50%;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translatex(-50%);
      }

      .palm-shadow {
        width: 20px;
        height: 70px;
        background: #c7656c;
        position: absolute;
        bottom: 50px;
        left: 50%;
        transform: translatex(-50%);
        filter: blur(10px);
      }

      @-webkit-keyframes rockit {
        from {
          transform: translatey(30px) rotate(-45deg);
        }
        to {
          transform: translatey(30px) rotate(10deg);
        }
      }

      @keyframes rockit {
        from {
          transform: translatey(30px) rotate(-45deg);
        }
        to {
          transform: translatey(30px) rotate(10deg);
        }
      }
      @-webkit-keyframes screensaver {
        to {
          box-shadow:
            0 0 0 80px #eee,
            0 0 0 120px #d36868,
            0 0 0 200px #71d368,
            0 0 0 250px #68cfd3;
        }
      }
      @keyframes screensaver {
        to {
          box-shadow:
            0 0 0 80px #eee,
            0 0 0 120px #d36868,
            0 0 0 200px #71d368,
            0 0 0 250px #68cfd3;
        }
      }
    </style>

    <script>
      window.console = window.console || function (t) {};
    </script>
  </head>

  <body translate="no">
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:900"
      rel="stylesheet"
    />

    <p class="rock">ROCK</p>
    <div class="hand">
      <div class="palm">
        <div class="bone"></div>
        <div class="palm-shadow"></div>
      </div>
      <div class="thumb-base"></div>
      <div class="mobile-shadow"></div>
      <div class="mobile">
        <div class="screensaver"></div>
      </div>
      <div class="finger-5 finger">
        <div class="finger-shadow"></div>
      </div>
      <div class="finger-4 finger">
        <div class="fingernail"></div>
      </div>
      <div class="finger-3 finger">
        <div class="fingernail"></div>
      </div>
      <div class="finger-2 finger">
        <div class="finger-shadow"></div>
      </div>
      <div class="finger-1 finger">
        <div class="fingernail"></div>
      </div>
    </div>

    <script id="rendered-js" />
  </body>
</html>
