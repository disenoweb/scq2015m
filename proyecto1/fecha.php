
HOY ES miercoles, 15 de abril de 2015. Es la semana 16 de un a�o de 365 d�as.
<br/>



<?php

$dias = array ('Wednesday'=>'mi�rcoles');
$meses = array ('April'=>'Abril');
$a�o = array(365,366);

echo date("\H\O\Y \\e\s "). 
            $dias[date('l')].date(", d \d\\e "). 
            $meses[date('F')].
            date(" \d\\e Y. \E\s \l\a \s\\e\\m\a\\n\a W \d\\e 
          \u\\n \a\�\o \d\\e ").
            $a�o[date('L')].date(" \d\i\a\s.");