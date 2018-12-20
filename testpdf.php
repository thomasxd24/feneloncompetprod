
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

</head>
<body>
  <iframe name="main" src="//www.javascriptbank.com/javascript/utility/jsPDF_Generating_your_PDF_Web_Page_Documents_using_JavaScript/index.php" scrolling="auto" frameborder="0" style="height: 95%; norezise: true;">
    <script>
    var doc = new jsPDF();

    doc.text(20, 20, 'This is the default font.');
    
    doc.setFont("courier");
    doc.setFontType("normal");
    doc.text(20, 30, 'This is courier normal.');

    doc.setFont("times");
    doc.setFontType("italic");
    doc.text(20, 40, 'This is times italic.');

    doc.setFont("helvetica");
    doc.setFontType("bold");
    doc.text(20, 50, 'This is helvetica bold.');

    doc.setFont("courier");
    doc.setFontType("bolditalic");
    doc.text(20, 60, 'This is courier bolditalic.');

    doc.setFont("times");
    doc.setFontType("normal");
    doc.text(105, 80, 'This is centred text.', null, null, 'center');
    doc.text(105, 90, 'And a little bit more underneath it.', null, null, 'center');
    doc.text(200, 100, 'This is right aligned text', null, null, 'right');
    doc.text(200, 110, 'And some more', null, null, 'right');
    doc.text(20, 120, 'Back to left');

    doc.text(20, 140, '10 degrees rotated', null, 10);
    doc.text(20, 160, '-10 degrees rotated', null, -10);
    doc.output('datauri');
    </script>
  </iframe>


</body>
</html>
