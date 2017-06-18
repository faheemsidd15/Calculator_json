<!DOCTYPE html>
<html>
<head>
    <title>Submit a form via AJAX</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css" />
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
    <script src="global.js"></script>
</head>
<body>

<script>

</script>

<!-- call ajax page -->
<div data-role="page" id="callAjaxPage">
    <div data-role="header">
        <h1>addition</h1>
    </div>

    <div data-theme='a' data-role="content">
        <form action="addPhp.php" id="callAjaxForm" method="post">
            <div data-role="fieldcontain">
                <input type="text" name="first" placeholder="First Number"> +
                <input type="text" name="second" placeholder="second number">





            </div>
            <button data-theme="b" id="submit" type="submit" >Calculate</button>
        </form>
    </div>

    <div data-theme='b' data-role="footer">

    <h3 id="notification"></h3>	<!-- THIS is called later on check function-->
</div>

</div>
</body>
</html>
