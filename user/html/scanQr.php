<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://raw.githubusercontent.com/mebjas/html5-qrcode/master/minified/html5-qrcode.min.js"></script>
</head>

<body>
  <h1 style="text-align: center">
    Qr code reader using JavaScript and HTML5
  </h1>
  <hr />
  <script src="html5-qrcode.min.js"></script>
  <style>
    .result {
      background-color: green;
      color: #fff;
      padding: 20px;
    }

    .row {
      display: flex;
    }
  </style>

  <div class="row">
    <div class="col">
      <div style="width: 500px" id="reader"></div>
    </div>
    <div class="col" style="padding: 30px">
      <h4>SCAN RESULT</h4>
      <!-- <div id="result">Result Here</div> -->
      <div id="result"></div>
    </div>
  </div>

  <script type="text/javascript">
    function onScanSuccess(qrCodeMessage) {
      document.getElementById("result").innerHTML =
        '<span class="result">' + qrCodeMessage + "</span>";

      var id = qrCodeMessage;
      window.location.href = `issueBookSaveData.php?bid=${id}`;
      console.log(bid);

    }

    function onScanError(errorMessage) {
      //handle scan error
    }

    var html5QrcodeScanner = new Html5QrcodeScanner("reader", {
      fps: 10,
      qrbox: 250,
    });
    html5QrcodeScanner.render(onScanSuccess, onScanError);
  </script>
</body>

</html>