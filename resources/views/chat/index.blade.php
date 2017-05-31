<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>

	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	<div id="app">
		<chat-log :messages="messages"></chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
	</div>

	<script>
		window.Laravel = <?php echo json_encode([
		  'csrfToken' => csrf_token(),
		]); ?>
    </script>

	<script src="/js/app.js"></script>
</body>
</html>