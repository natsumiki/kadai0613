
<head>
<meta charset="utf-8">
<title>アンケート調査</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<header>
<h1>週末の過ごし方・大調査</h1>
</header>
<form action="write.php" method="post">
    <table class=form>
    <tr>
    <th class="form-item">お名前</th> 
    <td class="form-body"><input type="text" name="name"></td>
    </tr>
    <tr>
    <th class="form-item">EMAIL</th>
    <td class="form-body"><input type="text" name="mail"></td> 
    </tr>
    <tr>
    <th class="form-item">性別</th>
    <td class="form-body">
    <ul>
        <li><label for=""><input type="radio" name="gender" value="男">男</label></li>
        <li><label for=""><input type="radio" name="gender" value="女">女</label></li>
    </ul>
    </td>
    </tr>
    <tr>
    <th class="form-item">年代</th>
    <td class="form-body">
    <ul>
        <li><label for=""><input type="radio" name="age" value="20代">20代</label></li>
        <li><label for=""><input type="radio" name="age" value="30代">30代</label></li>
        <li><label for=""><input type="radio" name="age" value="40代">40代</label></li>
    </ul>
    </td>
    </tr>
    <tr>
    <th class="form-item">過ごし方</th>
    <td class="form-body">
    <ul>
        <li><label for=""><input type="radio" name="place" value="自宅">自宅</label></li>
        <li><label for=""><input type="radio" name="place" value="外出">外出</label></li>
    </ul>
    </td>
    </tr>
    <tr>
    <th class="form-item">誰と？</th>
    <td class="form-body">
    <ul>
        <li><label for=""><input type="radio" name="company" value="１人">１人</label></li>
        <li><label for=""><input type="radio" name="company" value="友達・家族">友達・家族</label></li>
    </ul>
    </td>
    </tr>
    </table>
	<input type="submit" value="Send">
</form>
</body>
</html>