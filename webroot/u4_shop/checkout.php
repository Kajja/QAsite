<?php
$currentYear = date('Y');
?>
<!doctype html>
<html lang='en' class='no-js'>
<head>
    <meta charset='utf-8' />
    <link rel="stylesheet/less" type="text/css" href="checkout.less">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <script src="../js/less.min.js"></script>
    <script src="../js/modernizr.micke.js"></script>
</head>
<body>
    <div id='flash' class='wrapper'>
        <h1>Checkout</h1>
        <p class='hint'>(Testkreditkort: namn = kalle, nummer = 4916713787206385, cvc = 123)</p>
        <p id='info'>Att betala: <span id='sum'></span> Sek</p>
        <p id='error'></p>
        <form id='pay_form'>
            <div class='col1'>
                <p><label>Namn på kreditkortet*:<input type='text' name='name' required /></label></p>
                <p><label>Adress:<input type='text' name='address' /></label></p>
                <p><label>Postnummer:<input type='text' name='zip' /></label></p>
                <p><label>Stad:<input type='text' name='zip' /></label></p>
                <p><label>Land:
                        <select name='country'>
                            <option value='swe' />Sverige</option>
                            <option value='dk' />Danmark</option>
                            <option value='us' />USA</option>
                        </select>
                    </label>
                </p>
            </div>
            <div class='col2'>
                <p>
                    <label>Typ av kreditkort:
                        <select name='card_type'>
                            <option value='master' />MasterCard</option>
                            <option value='visa' />Visa</option>
                        </select>
                    </label>
                </p>
                <p>
                    <label>Kortnummer*:
                        <input type='text' name='card_num' pattern='[0-9]{16}' autocomplete='off' placeholder='16 siffror' required/>
                    </label>
                </p>
                <p>
                    <label>Utgång månad:
                        <select name='exp_month'>
                            <option value='jan' />januari</option>
                            <option value='feb' />februari</option>
                            <option value='mar' />mars</option>
                            <option value='apr' />april</option>
                            <option value='may' />maj</option>
                            <option value='jun' />juni</option>
                            <option value='jul' />juli</option>
                            <option value='aug' />augusti</option>
                            <option value='sep' />september</option>
                            <option value='oct' />oktober</option>
                            <option value='nov' />november</option>
                            <option value='dec' />december</option>
                        </select>
                    </label>
                <p>
                <p>
                    <label>Utgång år:
                        <select name='exp_year'>
                            <option value='<?=$currentYear;?>' /><?=$currentYear++;?></option>
                            <option value='<?=$currentYear;?>' /><?=$currentYear++;?></option>
                            <option value='<?=$currentYear;?>' /><?=$currentYear++;?></option>
                            <option value='<?=$currentYear;?>' /><?=$currentYear;?></option>
                        </select>
                    </label>
                <p>
                <p><label>CVC*:<input type='text' name='cvc' autocomplete='off' required /></label></p>
                <p id='btn_bar'>
                    <input id='pay_btn' type='submit' value='Betala' />
                    <a href="index.php">Tillbaka</a>
                </p>
            </div>
        </form>
    </div>
<?php
    $path=__DIR__;
    $d = explode("/", trim($path, "/"));
    $srcUrl = '../source.php?dir=' . end($d) . '&amp;file=' . basename($_SERVER["PHP_SELF"]) . '#file';
?>
    <footer id='footer'>
        <p><em>"Hey Luke, use the <a href='<?=$srcUrl?>'>source</a>."</em></p>
    </footer>
    <script src="../js/jquery.js"></script>
    <script src='../js/jquery.validate.js'></script>
    <script src='../js/messages_sv.min.js'></script>
    <script src='../js/jquery-ui.min.js'></script>
    <script src="checkout.js"></script>
</body>
</html>