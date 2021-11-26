<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* team/partials/js/download.js */
class __TwigTemplate_3e36b204ccd8c6d3702994740eb8440718b948dc0ef77a00d561f09c0307b433 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "//download.js v3.0, by dandavis; 2008-2014. [CCBY2] see http://danml.com/download.html for tests/usage
// v1 landed a FF+Chrome compat way of downloading strings to local un-named files, upgraded to use a hidden frame and optional mime
// v2 added named files via a[download], msSaveBlob, IE (10+) support, and window.URL support for larger+faster saves than dataURLs
// v3 added dataURL and Blob Input, bind-toggle arity, and legacy dataURL fallback was improved with force-download mime and base64 support

// data can be a string, Blob, File, or dataURL

\t\t 
\t\t\t\t\t\t 
\t\t\t\t\t\t 
function download(data, strFileName, strMimeType) {
\t
\tvar self = window, // this script is only for browsers anyway...
\t\tu = \"application/octet-stream\", // this default mime also triggers iframe downloads
\t\tm = strMimeType || u, 
\t\tx = data,
\t\tD = document,
\t\ta = D.createElement(\"a\"),
\t\tz = function(a){return String(a);},
\t\t
\t\t
\t\tB = self.Blob || self.MozBlob || self.WebKitBlob || z,
\t\tBB = self.MSBlobBuilder || self.WebKitBlobBuilder || self.BlobBuilder,
\t\tfn = strFileName || \"download\",
\t\tblob, 
\t\tb,
\t\tua,
\t\tfr;

\t//if(typeof B.bind === 'function' ){ B=B.bind(self); }
\t
\tif(String(this)===\"true\"){ //reverse arguments, allowing download.bind(true, \"text/xml\", \"export.xml\") to act as a callback
\t\tx=[x, m];
\t\tm=x[0];
\t\tx=x[1]; 
\t}
\t
\t
\t
\t//go ahead and download dataURLs right away
\tif(String(x).match(/^data\\:[\\w+\\-]+\\/[\\w+\\-]+[,;]/)){
\t\treturn navigator.msSaveBlob ?  // IE10 can't do a[download], only Blobs:
\t\t\tnavigator.msSaveBlob(d2b(x), fn) : 
\t\t\tsaver(x) ; // everyone else can save dataURLs un-processed
\t}//end if dataURL passed?
\t
\ttry{
\t
\t\tblob = x instanceof B ? 
\t\t\tx : 
\t\t\tnew B([x], {type: m}) ;
\t}catch(y){
\t\tif(BB){
\t\t\tb = new BB();
\t\t\tb.append([x]);
\t\t\tblob = b.getBlob(m); // the blob
\t\t}
\t\t
\t}
\t
\t
\t
\tfunction d2b(u) {
\t\tvar p= u.split(/[:;,]/),
\t\tt= p[1],
\t\tdec= p[2] == \"base64\" ? atob : decodeURIComponent,
\t\tbin= dec(p.pop()),
\t\tmx= bin.length,
\t\ti= 0,
\t\tuia= new Uint8Array(mx);

\t\tfor(i;i<mx;++i) uia[i]= bin.charCodeAt(i);

\t\treturn new B([uia], {type: t});
\t }
\t  
\tfunction saver(url, winMode){
\t\t
\t\t
\t\tif ('download' in a) { //html5 A[download] \t\t\t
\t\t\ta.href = url;
\t\t\ta.setAttribute(\"download\", fn);
\t\t\ta.innerHTML = \"downloading...\";
\t\t\tD.body.appendChild(a);
\t\t\tsetTimeout(function() {
\t\t\t\ta.click();
\t\t\t\tD.body.removeChild(a);
\t\t\t\tif(winMode===true){setTimeout(function(){ self.URL.revokeObjectURL(a.href);}, 250 );}
\t\t\t}, 66);
\t\t\treturn true;
\t\t}
\t\t
\t\t//do iframe dataURL download (old ch+FF):
\t\tvar f = D.createElement(\"iframe\");
\t\tD.body.appendChild(f);
\t\tif(!winMode){ // force a mime that will download:
\t\t\turl=\"data:\"+url.replace(/^data:([\\w\\/\\-\\+]+)/, u);
\t\t}
\t\t 
\t
\t\tf.src = url;
\t\tsetTimeout(function(){ D.body.removeChild(f); }, 333);
\t\t
\t}//end saver 
\t\t

\tif (navigator.msSaveBlob) { // IE10+ : (has Blob, but not a[download] or URL)
\t\treturn navigator.msSaveBlob(blob, fn);
\t} \t
\t
\tif(self.URL){ // simple fast and modern way using Blob and URL:
\t\tsaver(self.URL.createObjectURL(blob), true);
\t}else{
\t\t// handle non-Blob()+non-URL browsers:
\t\tif(typeof blob === \"string\" || blob.constructor===z ){
\t\t\ttry{
\t\t\t\treturn saver( \"data:\" +  m   + \";base64,\"  +  self.btoa(blob)  ); 
\t\t\t}catch(y){
\t\t\t\treturn saver( \"data:\" +  m   + \",\" + encodeURIComponent(blob)  ); 
\t\t\t}
\t\t}
\t\t
\t\t// Blob but not URL:
\t\tfr=new FileReader();
\t\tfr.onload=function(e){
\t\t\tsaver(this.result); 
\t\t};
\t\tfr.readAsDataURL(blob);
\t}\t
\treturn true;
} /* end download() */

";
    }

    public function getTemplateName()
    {
        return "team/partials/js/download.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/js/download.js", "/opt/domjudge/domserver/webapp/templates/team/partials/js/download.js");
    }
}
