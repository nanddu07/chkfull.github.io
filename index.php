
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


    <head>
        <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
                <link href="assets\css\style.css" rel="stylesheet" type="text/css">
        <meta name="author" value="Kobra">
    </head>

<!-- Mirrored from A by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:18:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ThiagoNaVoiz">
    <title>CD7 NO TOPO</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../bootstraplogos.com/wp-content/uploads/edd/2018/04/logo-3.html">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css"> -->
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.min.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css"> -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
<!--     <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
    <!-- END Custom CSS-->
  </head>
<script src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="app-assets/js/checker.js" type="text/javascript"></script>

  <body class="vertical-layout" data-color="bg-gradient-x-black-green">
  <style>
body {
  background-image: url('app-assets/images/backgrounds/background.jpg');
  background-size: 150%;
}
</style>
<center>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
           <div align='left' class="content-header-left col-md-4 col-12 mb-2">
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
    <section>
  <div class="row match-height">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <br>
                      <img src="app-assets/images/backgrounds/nanddu.png" width="500" height="100" alt="Italian Trulli"></img>
            <h5 class="h5 mb-0 text-gray-800">"De carders, para carders."</h5><br>
			<h5 class="h5 mb-0 text-gray-800">Não testamos GERADAS, elas caem como reprovadas!</h5>
			<h5 class="h5 mb-0 text-gray-800">Livre de CX2! Online até a gate cair!</h5>
          <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
          </a>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li>
                <a data-action="collapse">
                  <i class="ft-minus"></i>
                </a>
              </li>
              <li>
                <a data-action="reload">
                  <i class="ft-rotate-cw"></i>
                </a>
              </li>
<!--               <li>
                <a data-action="expand">
                  <i class="ft-maximize"></i>
                </a>
              </li> -->
              <li>
                <a data-action="close">
                  <i class="ft-x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
<!--            <div class="card-text" align='left'>
              <p>Testador é de 
                <code>Full</code> então pra quer testar geradas desgracinha</p>
            </div> -->
            <form class="form">
              <div class="form-body">
                <textarea style="font-size: 100%; height: 208px; text-align:center; width:100%;resize:none;outline:none;overflow: hidden;" class="form-control" align='left' rows="4" id="lista_ccs" placeholder="0000000000000000|00|0000|000"></textarea>

              </div>
            <div class="card-body">
            <span>STATUS:</span>&nbsp;<span id="status_ccs" class="badge badge-success">Pausado..</span>
            <br>
            <br>
            <span>APROVADAS:</span>&nbsp;<span id="lives_ccs" class="badge badge-success">0</span>
            <span>REPROVADAS:</span>&nbsp;<span id="dies_ccs" class="badge badge-danger"> 0</span>
			<span>INVALIDAS:</span>&nbsp;<span id="invalido_ccs" class="badge badge-warning"> 0</span>
            <span>TESTADAS:</span>&nbsp;<span id="testado_ccs" class="badge badge-info">0</span>
            <span>CARREGADAS:</span>&nbsp;<span id="total_ccs" class="badge badge-dark">0</span><br>
          </div>
            <button style="width:30%;" id="iniciarchk" type="button" class="btn waves-effect waves-light btn-outline-success">Iniciar</button>
            <button style="width:30%;" id="pararchk" type="button" disabled="" class="btn waves-effect waves-light btn-outline-danger">Parar</button>
            <button style="width:30%;" onclick="javascript:limpar();" type="button" class="btn waves-effect waves-light btn-outline-primary">Limpar</button>
            <audio src="audio.mp3" autoplay controls>
              Seu navegador não tem suporte a tag audio.
</audio>
        </div>
            </form>
			 <img align='center' src="app-assets/images/backgrounds/cielo.png" width="250" height="100" alt="Italian Trulli"></img>
      <h5 class="h5 mb-0 text-gray-800" align='left'>ㅤ"Conhecimento não é crime, mas seus atos são."</h5>
          </div>
        </div>
      </div>
    </div>
<br>

  <div class="col-md-15">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" align='left' >Aprovadas -&nbsp;<span id="lives_cs" class="badge badge-success">0</span></h4>
          <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
          </a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li>
                <a data-action="collapse">
                  <i class="ft-minus"></i>
                </a>
              </li>
              <li>
                <a data-action="reload">
                  <i class="ft-rotate-cw"></i>
                </a>
              </li>
              <li>
                <a data-action="expand">
                  <i class="ft-maximize"></i>
                </a>
              </li>
              <li>
                <a data-action="close">
                  <i class="ft-x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div align='left' id="aprovadas"> </div>
        </div>
      </div>
    </div>
  </div>

    <div class="col-md-15">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" align='left' >Reprovados -&nbsp;<span id="dies_cs" class="badge badge-danger">0</span></h4>
          <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
          </a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li>
                <a data-action="collapse">
                  <i class="ft-minus"></i>
                </a>
              </li>
              <li>
                <a data-action="reload">
                  <i class="ft-rotate-cw"></i>
                </a>
              </li>
              <li>
                <a data-action="expand">
                  <i class="ft-maximize"></i>
                </a>
              </li>
              <li>
                <a data-action="close">
                  <i class="ft-x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div align='left' id="reprovadas"> </div>
        </div>
      </div>
    </div>
  </div>

      <div class="col-md-15">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" align='left' >Invalidas -&nbsp;<span id="invalido_cs" class="badge badge-warning">0</span></h4>
          <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
          </a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li>
                <a data-action="collapse">
                  <i class="ft-minus"></i>
                </a>
              </li>
              <li>
                <a data-action="reload">
                  <i class="ft-rotate-cw"></i>
                </a>
              </li>
              <li>
                <a data-action="expand">
                  <i class="ft-maximize"></i>
                </a>
              </li>
              <li>
                <a data-action="close">
                  <i class="ft-x"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div align='left' id="invalidas"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</center>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<a class="btn btn-try-builder btn-bg-gradient-x-blue-green btn-glow white" href="" target="_blank"><i class="ft-airplay"></i>Limite de 1000 CC por teste!</a>
</center>
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
  </body>-

<script type="text/javascript">
var message="Desculpe, o clique com o botão direito foi desativado.";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</script>

<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("esc",function()
{top.location.href="https://www.xvideos.com"});shortcut.add("Ctrl+U",function()
{top.location.href="https://www.xvideos.com"});
//]]>
</script>


<!-- Mirrored from slokelindu by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 07:18:36 GMT -->
</html>