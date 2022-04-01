<html lang="en">
  <head>
    <style type="text/css">
      table
      {
        visibility: none;
        display: none;
      }
      #visibleTR {
        display: none;
      }
    </style>
    <title>QR Code Generator</title>
  </head>
  <body>
    <div id="message">
      
    </div>
    <table id="tblQR" border="2px">
      <tr id="visibleTR">
        <td>
          <label for="quantityInput">Quantity</label>
          <input type="text" name="" id="quantityInput"

          <?php

            $val = $_GET['b_quantity'];
            echo "value='$val'";

          ?>

          >
        </td>
        <td>
          <label for="">Input</label>
          <input type="text" id="qr-data"

          <?php

            $val = $_GET['b_id'];
            echo "value='$val'";

          ?>

          />
        </td>
        <td>
          <button onclick="GenerateQR()">Generate QR</button>
        </td>
        <td>
          <button onclick="DownloadURI()">Download QR</button>
        </td>
      </tr>
    </table>
  </body>
  <script type="text/javascript"src="http://static.runoob.com/assets/qrcode/qrcode.min.js"></script>
  <script src="html5-qrcode.min.js"></script>
  <script>
    let qrData = document.getElementById("qr-data"); // data to be fitted in qr code...
    let qrQuantity = document.getElementById("quantityInput"); // the quantity that will be added...
    let tblQr = document.getElementById("tblQR"); // table to handle or show the data/qr codes...

    function generateQR(qrcode,data) {
      qrcode.makeCode(data);
    }

    function downloadURI(id,name) {
      
      var elem = document.getElementById(id);
      console.log(elem);
      var dataUrl = document.querySelector("#"+id).querySelector('img').src;

      var link = document.createElement("a");
      link.download = name+id;
      link.href = dataUrl;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      delete link;
    }

    function DownloadURI() {

      // do not go for first row...
      // run from 1st row to last...
      for(let i=1; i<tblQr.rows.length; i++) {
        let idofQR = tblQr.rows[i].cells[0].id; // get the id, because the data is there...
        let name = "qrCode"; // name of the file, which can be dynamic..
        downloadURI(idofQR,name);
      }

    }

    function GenerateQR() {
      // it will be the last/max book id, which is given...
      let data = parseInt(qrData.value); // data from input box...

      // it will give the count that, for how many books the QR code needs to be generated...
      let quantity = parseInt(qrQuantity.value); //quantity... from input box...

      // run of quantity times....
      for(let i=1; i<=quantity; i++) {

        var row = tblQr.insertRow(i); // row to be added...
        var cell = row.insertCell(0); // cell to be inserted...
        cell.setAttribute("id", "x"+(data+i)); // id to be set is ... data to be given...
        let qrcode = new QRCode(document.getElementById("x"+(data+i))); // place where the qr code will be shown...
        let dataToPass = data+i; // data...
        generateQR(qrcode,dataToPass.toString()); // generating qr...

      }
      setTimeout(()=>{
        DownloadURI();
        //console.log("Downloading...");
      },1500);
    }

    GenerateQR();
    let message_id = document.getElementById('message');
    message_id.innerHTML = "<h4>Generating QR Code/s, Please Wait and don't close the window!</h4>";
    <?php 

      $val = $_GET['b_quantity'];
      echo "let time = ".($val).";";
      echo "console.log(time+1);";

    ?>

    if(time > 10) {
      time = 5000;
    } else {
      time = 3000;
    }

    window.setTimeout(()=>{
      <?php

        include 'config.php';
        //echo "console.log('Hello! From JS-PHP')";
        //header("location: $hostname/admin/html/add_book.php");
        $location = "$hostname/admin/html/add_book.php";
        echo "let name = '".$location."';";
        

      ?>
      var link = document.createElement('a');
      link.href = name;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      delete link;

    },time);
    

  </script>
</html>