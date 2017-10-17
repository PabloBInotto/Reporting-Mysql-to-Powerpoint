<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>PptxGenJS Examples/Demo Page</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
	<meta name="author" content="https://github.com/gitbrent">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300|Roboto+Mono|Open+Sans" rel="stylesheet">
	<!-- IE11 Users: - Use the following 3 lines instead of the one above
	<link href="https://fonts.googleapis.com/css?family=Roboto:100"  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300"  rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans"   rel="stylesheet">
	-->
	<link type="text/css" rel="stylesheet" href="pptxgenjs-demo.css">

	<!-- NOTE:
		1) Running this on your local PC requires Chrome be run from the console/terminal in order to allow reading local image files
			$ open -a 'Google Chrome' -\-args -\-allow-file-access-from-files &
			(Otherwise you will receive: "Tainted canvases may not be exported" message in console)
		2) IE11 will show an "Active-X blocked on this page, do you want to allow?" secuirty dialog when run locally (run from server to remedy)
 	-->

	<!-- vvv PptxGenJS libraries (jquery/jszip/pptxgen are required) vvv -->
	<script type="text/javascript" src="../libs/jquery.min.js"></script>
	<script type="text/javascript" src="../libs/jszip.min.js"></script>
	<script type="text/javascript" src="../libs/promise.min.js"></script>     <!-- optional if not using IE11 -->
	<script type="text/javascript" src="../dist/pptxgen.colors.js"></script>  <!-- optional if you dont need PPT Color Schemes -->
	<script type="text/javascript" src="../dist/pptxgen.shapes.js"></script>  <!-- optional if you dont need non-core Shapes -->
	<!--<script type="text/javascript" src="../dist/pptxgen.masters.js"></script> DEPRECATED/LEGACY-TEST-ONLY -->
	<script type="text/javascript" src="../dist/pptxgen.js"></script>
	<!-- ^^^ PptxGenJS libraries ^^^ -->

	<script type="text/javascript" src="../examples/pptxgenjs-demo.js"></script>
	<script type="text/javascript" src="images/base64Images.js"></script>
	<script type="text/javascript" src="media/base64media.js"></script>
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>

	<script type="text/javascript">

			// STEP 1: Criar uma nova apresentação
			var pptx = new PptxGenJS();

			// STEP 2: Adicionar o slide da apresentação
			var slide = pptx.addNewSlide();

			// STEP 3: Adicionar qualquer iten no slide
			slide.addText(
			  'BONJOUR - CIAO - GUTEN TAG - HELLO - HOLA - NAMASTE - OLÀ - ZDRAS-TVUY-TE - こんにちは - 你好',
			  { x:0.0, y:0.25, w:'100%', h:1.5, align:'c', font_size:24, color:'0088CC', fill:'F1F1F1' }
			);

			slide.addText(
			  'Video aula de como cria r uma apresentação em power point usando php javascript coletando dados no mysql',
			  { x:0.0, y:2.25, w:'100%', h:1.5, align:'c', font_size:24, color:'0088CC', fill:'F1F1F1' }
			);

			// STEP 4: Salva e faz download da apresentação
			pptx.save('PptxGenJs-Basic-Slide-Demo');

  </script>

  </body>
  </html>
