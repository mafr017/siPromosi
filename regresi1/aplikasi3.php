
<html>
<head>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/handsontable/handsontable.full.js"></script>
	<link type="text/css" rel="stylesheet" href="vendor/handsontable/handsontable.full.min.css">
	<link tye="text/css" rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
	<link tye="text/css" rel="stylesheet" href="vendor/bootstrap/css/style.css" />

	<title>Analisis Jalur (Path Analysis)</title>
</head>
<body>
	<div class="container">
		<button type="button" onclick="window.location='index.html';" class="btn btn-info" style="margin-top:15px;">Halaman Utama</button>
		<div style="width: 5%; display: inline-block; float:right; margin-top:20px;">
                	<img class= "img-responsive" src="img/UBM.png" />
            	</div>
		<center>
			<h1>Analisis Jalur (Path Analysis)</h1>
			<br>
			<!-- <p>Analisis jalur merupakan perluasan dari analisis regresi linear berganda, atau analisis jalur adalah penggunaan analisis regresi untuk menaksir hubungan kausalitas antar variabel (<i>model casual</i>) yang telah ditetapkan sebelumnya berdasarkan teori. Analisis jalur sendiri tidak dapat menentukan hubungan sebab-akibat dan juga tidak dapat digunakan sebagai substitusi bagi peneliti untuk melihat hubungan kausalitas antar variabel. Imam Gozali (2013 : 249)</p> -->
		</center>
		<br>
		<div class="row">
		<div class="col-md-12 yellow">
			<!--<div class="col-md-6 blue">
				<center><h3>Regresi Sederhana</h3></center>
			</div>

			<div class="col-md-6 red">
				<center><h3>Regresi Berganda</h3></center>
			</div>-->

			<center>
				<!--<h4>&nbsp;</h4>-->
				<h4>Tingkat Signifikan :
					<label class="radio-inline">
					  <input type="radio" name="alfa" value=0.01 checked> 1%
					</label>
					<label class="radio-inline">
					  <input type="radio" name="alfa" value=0.05> 5%
					</label>
					<label class="radio-inline">
					  <input type="radio" name="alfa" value=0.1> 10%
					</label>
				</h4>

				<form class="form-inline">
					<label class="sr-only" for="inlineFormInputGroup">vBebas</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon">X</div>
						<input type="text" class="form-control" id="namavbebas" placeholder="Variabel bebas">
					</div>
					&emsp;
					<label class="sr-only" for="inlineFormInputGroup">vMed</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon">M</div>
						<input type="text" class="form-control" id="namavmediasi" placeholder="Variabel mediasi">
					</div>
					&emsp;
					<label class="sr-only" for="inlineFormInputGroup">vTerikat</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon">Y</div>
						<input type="text" class="form-control" id="namavterikat" placeholder="Variabel terikat">
					</div>
				</form>
			</center>

			<div class="col-md-6 blue">
				<center><h3>Regresi Sederhana</h3></center>
				<br>
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<div id="rs" class="hot handsontable"></div>
				</div>
				<div class="col-md-2"></div>

				<div class="clearfix"></div>
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<div id="answer">
					</div>
				</div>
				<div class="clearfix"></div>
				<br>

				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="rsf" class="inv">
						<div class="table-responsive">
							<table class="table table-bordered">
							  	<tr>
							    	<td colspan=6><center><b>Uji F</b></center></td>
							    </tr>
							    <tr>
							    	<td>Sumber</td>
							    	<td>df</td>
							    	<td>JK</td>
							    	<td>RK</td>
							    	<td>F<sub>hitung</sub></td>
							    	<td>F<sub>tabel</sub></td>
							    </tr>
							    <tr>
							    	<td>Regresi</td>
							    	<td id="rsk-1"></td>
							    	<td id="rsjkr"></td>
							    	<td id="rsrkr"></td>
							    	<td id="rsfhit" rowspan=3></td>
							    	<td id="rsftab" rowspan=3></td>
							    </tr>
							    <tr>
							    	<td>Sisa</td>
							    	<td id="rsn-k"></td>
							    	<td id="rsjks"></td>
							    	<td id="rsrks"></td>
								</tr>
								<tr>
									<td>Total</td>
									<td id="rsn-1"></td>
									<td id="rsjkt"></td>
									<td>-</td>
								</tr>
								<tr>
									<td colspan=6 id="rsfketerangan"></td>
								</tr>
							</table>

							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td id="rskesimpulan"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="rst" class="inv">
						<div class="table-responsive">
							<table class="table table-bordered">
							  	<tr>
							    	<td colspan=5><center><b>Uji T</b></center></td>
							    </tr>
							    <tr>
							    	<td rowspan=2>Model</td>
							    	<td colspan=2>Unstandardized<br>Coefficients</td>
							    	<td rowspan=2>t<sub>hitung</sub></td>
							    	<td rowspan=2>t<sub>tabel</sub></td>
							    </tr>
							    <tr>
							    	<td>B</td>
							    	<td>Std. Error</td>
							    </tr>
							    <tr>
							    	<td>Konstanta</td>
							    	<td id="rsa">a</td>
							    	<td id="rssa">sa</td>
							    	<td id="rsta">ta</td>
							    	<td id="rsttab" rowspan=2>ttab</td>
								</tr>
								<tr>
									<td><span class="varbebas">X</span></td>
									<td id="rsb">b</td>
									<td id="rssb">sb</td>
									<td id="rstb">tb</td>
								</tr>
								<tr>
									<td colspan=5 id="rsketerangant"></td>
								</tr>
							</table>

							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td id="rskesimpulant"></td>
									</tr>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 red">
				<center><h3>Regresi Berganda</h3></center>
				<br>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<div id="rb" class="hot handsontable"></div>
				</div>

				<div class="clearfix"></div>
				<div class="col-md-1"></div>
				<div class="col-md-9">
					<div id="answer1">
					</div>
				</div>

				<div class="clearfix"></div>
				<br>

				<div class="col-md-1"></div>
				<div class="col-md-11">
					<div id="rbf" class="inv">
						<div class="table-responsive">
							<table class="table table-bordered">
							  	<tr>
							    	<td colspan=6><center><b>Uji F</b></center></td>
							    </tr>
							    <tr>
							    	<td>Sumber</td>
							    	<td>df</td>
							    	<td>JK</td>
							    	<td>RK</td>
							    	<td>F<sub>hitung</sub></td>
							    	<td>F<sub>tabel</sub></td>
							    </tr>
							    <tr>
							    	<td>Regresi</td>
							    	<td id="rbk-1"></td>
							    	<td id="rbjkr"></td>
							    	<td id="rbrkr"></td>
							    	<td id="rbfhit" rowspan=3></td>
							    	<td id="rbftab" rowspan=3></td>
							    </tr>
							    <tr>
							    	<td>Sisa</td>
							    	<td id="rbn-k"></td>
							    	<td id="rbjks"></td>
							    	<td id="rbrks"></td>
								</tr>
								<tr>
									<td>Total</td>
									<td id="rbn-1"></td>
									<td id="rbjkt"></td>
									<td>-</td>
								</tr>
								<tr>
									<td colspan=6 id="rbfketerangan"></td>
								</tr>
							</table>

							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td id="rbkesimpulan"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-md-1"></div>
				<div class="col-md-11">
					<div id="rbt" class="inv">
						<div class="table-responsive">
							<table class="table table-bordered">
							  	<tr>
							    	<td colspan=5><center><b>Uji T</b></center></td>
							    </tr>
							    <tr>
							    	<td rowspan=2>Model</td>
							    	<td colspan=2>Unstandardized<br>Coefficients</td>
							    	<td rowspan=2>t<sub>hitung</sub></td>
							    	<td rowspan=2>t<sub>tabel</sub></td>
							    </tr>
							    <tr>
							    	<td>B</td>
							    	<td>Std. Error</td>
							    </tr>
							    <tr>
							    	<td>Konstanta</td>
							    	<td id="rba">a</td>
							    	<td id="rbsa">sa</td>
							    	<td id="rbta">ta</td>
							    	<td id="rbttab" rowspan=3>ttab</td>
								</tr>
								<tr>
									<td><span class="varbebas">X</span></td>
									<td id="rbb1">b1</td>
									<td id="rbsb1">sb1</td>
									<td id="rbtb1">tb1</td>
								</tr>
								<tr>
									<td><span class="varmediasi">M</span></td>
									<td id="rbb2">b2</td>
									<td id="rbsb2">sb2</td>
									<td id="rbtb2">tb2</td>
								</tr>
								<tr>
									<td colspan=5 id="rbketerangant"></td>
								</tr>

							</table>

							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
									<td colspan=5>
										Kesimpulan :<br>
										<ol>
											<li id="kesimpulant1"></li>
											<li id="kesimpulant2"></li>
											<li id="kesimpulant3"></li>
										</ol>
									</td>
								</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class="clearfix"></div>
			<div id="in">
				<center>
					<button type="button" id="kumpul" class="btn btn-default" style="margin-top: -15px;">Submit</button>
				</center>
			</div>

			<div id="analisis" class="green inv">
				<center>
					<br><br>
					<h3>Analisis Jalur (Path Analysis)</h3><br>
					<div id="analisispers">

						<br>

						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="table-responsive">
								<table class="table">
									<tr>
										<td colspan="3"><center>Persamaan Struktural</center></td>
									</tr>
									<tr>
										<td><span class="varmediasi">M</span></td>
										<td> = </td>
										<td><span id="p2"></span> <span class="varbebas">X</span> + <span id="e1"></span></td>
									</tr>
									<tr>
										<td><span class="varterikat">Y</span></td>
										<td> = </td>
										<td><span id="p1"></span> <span class="varbebas">X</span> + <span id="p3"></span> <span class="varmediasi">M</span> + <span id="e2"></span></td>
									</tr>
								</table>
							</div>
						</div>

						<div class="clearfix"></div>
						
						<br>
						
						<!-- <div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td>Pengaruh langsung <span class="varbebas">X</span> ke <span class="varmediasi">M</span> &nbsp;</td>
										<td>&nbsp;&nbsp;<span id="p1xy"></span></td>
										
									</tr>
										<td>Pengaruh tak langsung <span class="varbebas">X</span> ke <span class="varmediasi">M</span> ke <span class="varterikat">Y</span></td>
										<td>&nbsp;&nbsp;<span id="p2xp3"></span></td>

									</tr>
									<tr>
										<td>Total Pengaruh (korelasi <span class="varbebas">X</span> ke <span class="varterikat">Y</span>) &nbsp;</td>
										<td>&nbsp;&nbsp;<span id="p1p2xp3"></span></td>

									</tr>
								</table>
							</div>
						</div>
						
						<div class="clearfix"></div>
						<br> -->

						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
							    		<td colspan=3><center>Uji Sobel Test</center></td>
									</tr>
									<tr>
										<td><center>Standar Error<br>(Sp2p3)</center></td>
										<td><center>t<sub>hitung</sub></center></td>
										<td><center>t<sub>tabel</sub></center></td>
									</tr>
									<tr>
										<td id="sp2p3"></td>
										<td id="ajthitung"></td>
										<td id="ajttabel"></td>
									</tr>
									<tr>
										<td colspan=3 id="ajkesimpulan"></td>
									</tr>
								</table>
							</div>

							<br><br>
							<button type="button" onclick="window.location='aplikasi.php';" class="btn btn-success" style="margin-top: -15px;">Coba Lagi</button>
						</div>
						<div class="col-md-4"></div>

					</div>
				</center>
			</div>
		</div>
	</div>
	<!-- <button type="button" id="stest" class="btn btn-default" style="margin-top: -15px;">STEST</button> -->
	</div>
</body>

<script>

var data = [
	{ id: 1, x1: "250", x2: "100" },
	{ id: 2, x1: "250", x2: "100" },
	{ id: 3, x1: "250", x2: "100" },
	{ id: 4, x1: "125", x2: "100" },
	{ id: 5, x1: "125", x2: "50" },
	{ id: 6, x1: "125", x2: "50" },
	{ id: 7, x1: "100", x2: "50" },
	{ id: 8, x1: "100", x2: "50" },
	{ id: 9, x1: "100", x2: "100" },
	{ id: 10, x1: "125", x2: "100" },
	{ id: 11, x1: "250", x2: "100" },
	{ id: 12, x1: "250", x2: "100" },
];
console.log(data);
data.valueOf();

$('#rs').handsontable({
	data,
	columns: [
		{
			data: 'x1',
			type: 'numeric',
			format: '0.00',
		},
		{
			data: 'x2',
			type: 'numeric',
			format: '0.00',
		}
	],

 width: 400,
 height: 300,
 colWidths: [150,150],
 minSpareRows: 1,
 startRows : 10,
 startCols : 2,
 colHeaders : ['Variabel Bebas<br>X', 'Variabel Mediasi<br>M'],
 rowHeaders : true,
 autoWrapRow : true,
 autoWrapCol : true,
 enterBeginsEditing : false,
 formulas : true
})

const data2 = [
  [250, 100, 11],
  [250,	100, 4],
  [250,	100, 6],
  [125,	100, 2],
  [125, 50,	7],
  [125, 50,	3],
  [100, 50,	1],
  [100, 50,	4],
  [100,	100, 1],
  [125,	100, 2],
  [250,	100, 10],
  [250,	100, 9]
];

$('#rb').handsontable({
 data: data2,
 columns: [
 	{
		type: 'numeric',
		format: '0.00',
    	//allowInvalid : false
    },
    {
    	type:'numeric',
    	format: '0.00',
    	//allowInvalid : false
    },
    {
    	type:'numeric',
    	format: '0.00',
    	//allowInvalid : false
    }
  ],

 width: 450,
 height: 300,
 colWidths: [125, 130, 125],
 minSpareRows: 1,
 startRows : 10,
 startCols : 3,
 colHeaders : ['Variabel Bebas<br>X', 'Variabel Mediasi<br>M', 'Variabel Terikat<br>Y'],
 rowHeaders : true,
 autoWrapRow : true,
 autoWrapCol : true,
 enterBeginsEditing : false,
 formulas : true
})

$(document).on('change', $('input[type="text"]'), function() {
	var vbebas=$("#namavbebas").val();
	var vmediasi=$("#namavmediasi").val();
	var vterikat=$("#namavterikat").val();
	if(vbebas==""){
		vbebas="Variabel Bebas<br>X";
	}

	if(vmediasi==""){
		vmediasi="Variabel Mediasi<br>M";
	}

	if(vterikat==""){
		vterikat="Variabel Terikat<br>Y";
	}
	
	$('#rs').handsontable({
		colHeaders : [vbebas, vmediasi],
	});

	$('#rb').handsontable({
	 	colHeaders : [vbebas, vmediasi, vterikat],
	});
});

function countNonEmptyRows(tabel){
    var ht = $(tabel).handsontable('getInstance');
    var rowcount = ht.countRows() - ht.countEmptyRows();
    return rowcount;
}

function sumColValue(tabel, j, baris){
    var i=0, total=0;
    for (i = 0; i < baris; i++) {
        total+=$(tabel).handsontable('getDataAtCell', i, j);
    }
    return total;
}

function colMultipleCol(tabel, a, b, baris){
    var i=0, total=0;
    for(i=0; i<baris; i++){
        total+=$(tabel).handsontable('getDataAtCell', i, a)*$(tabel).handsontable('getDataAtCell', i, b);
    }
    return total;
}

function sumColPow(tabel, j, baris){
    var i=0, total=0;
    for (i = 0; i < baris; i++) {
        total+=Math.pow($(tabel).handsontable('getDataAtCell', i, j), 2);
    }
    return total;
}

function uneditablecell(tabel){
	var hot = $(tabel).handsontable('getInstance');
	hot.updateSettings({
	    readOnly: true
	});
}

function radioDisabled(){
	$("input[type=radio]").attr('disabled', true);
}

function textDisabled(){
	$("input[type=text]").attr('disabled', true);
}

//javastat
var Pi=Math.PI;
var PiD2=Pi/2;
var PiD4=Pi/4;
var Pi2=2*Pi;
var e=2.718281828459045235;
var e10 = 1.105170918075647625;
var Deg=180/Pi;

function ChiSq(x,n) {
	var fn=Math.floor(n);
	var cn=Math.ceil(n);
	if( fn!=n ) {
		Xf = Math.log( ChiSq(x,fn) );
		Xc = Math.log( ChiSq(x,cn) );
		return Math.exp( (cn-n)*Xf + (n-fn)*Xc );
	}
	if(x>1000 | n>1000) {
		var q=Norm((Math.pow(x/n,1/3)+2/(9*n)-1)/Math.sqrt(2/(9*n)))/2;
		if (x>n) {return q}{return 1-q} 
	}
	var p=Math.exp(-0.5*x);
	if((n%2)==1) {
		p=p*Math.sqrt(2*x/Pi);
	}
	var k=n;
	while(k>=2) {
		p=p*x/k;
		k=k-2;
	}
	var t=p; var a=n;
	while(t>1e-15*p) {
		a=a+2;
		t=t*x/a;
		p=p+t
	}
	return 1-p;
}

function Norm(z) {
	var q=z*z;
	if(Math.abs(z)>7) {return (1-1/q+3/(q*q))*Math.exp(-q/2)/(Math.abs(z)*Math.sqrt(PiD2))} {return ChiSq(q,1) }
}

function StudT(t,n) {
	var fn=Math.floor(n);
	var cn=Math.ceil(n);
	if( fn!=n ) {
		Tf = Math.log( StudT(t,fn) );
		Tc = Math.log( StudT(t,cn) );
		return Math.exp( (cn-n)*Tf + (n-fn)*Tc );
	}
	t=Math.abs(t);
	var w=t/Math.sqrt(n);
	var th=Math.atan(w);
	if(n==1) { return 1-th/PiD2 }
	var sth=Math.sin(th);
	var cth=Math.cos(th);
	if((n%2)==1){
		return 1-(th+sth*cth*StatCom(cth*cth,2,n-3,-1))/PiD2
	}else{
		return 1-sth*StatCom(cth*cth,1,n-3,-1);
	}
}

function FishF(f,n1,n2) {
	var fn1=Math.floor(n1);
	var cn1=Math.ceil(n1);
	var fn2=Math.floor(n2);
	var cn2=Math.ceil(n2);
	if( fn1!=n1 | fn2!=n2 ) {
		Fff = Math.log( FishF(f,fn1,fn2) ); Ffc = Math.log( FishF(f,fn1,cn2) );
		Fcf = Math.log( FishF(f,cn1,fn2) ); Fcc = Math.log( FishF(f,cn1,cn2) );
		return Math.exp((cn1-n1)*(cn2-n2)*Fff+(n1-fn1)*(cn2-n2)*Fcf+(cn1-n1)*(n2-fn2)*Ffc+(n1-fn1)*(n2-fn2)*Fcc);
	}
	var x=n2/(n1*f+n2);
	if((n1%2)==0) { return StatCom(1-x,n2,n1+n2-4,n2-2)*Math.pow(x,n2/2) }
	if((n2%2)==0){ return 1-StatCom(x,n1,n1+n2-4,n1-2)*Math.pow(1-x,n1/2) }
	var th=Math.atan(Math.sqrt(n1*f/n2));
	var a=th/PiD2;
	var sth=Math.sin(th);
	var cth=Math.cos(th);
	if(n2>1) { a=a+sth*cth*StatCom(cth*cth,2,n2-3,-1)/PiD2 }
	if(n1==1) { return 1-a }
	var c=4*StatCom(sth*sth,n2+1,n1+n2-4,n2-2)*sth*Math.pow(cth,n2)/Pi;
	if(n2==1) { return 1-a+c/2 }
	var k=2;
	while(k<=(n2-1)/2) {
		c=c*k/(k-.5);
		k=k+1
	}
	return 1-a+c;
}

function StatCom(q,i,j,b) {
	var zz=1;
	var z=zz;
	var k=i;
	while(k<=j) {
		zz=zz*q*k/(k-b);
		z=z+zz;
		k=k+2;
	}
	return z;
}

function ANorm(p) {
	var v=0.5;
	var dv=0.5;
	var z=0;
	while(dv>1e-6) {
		z=1/v-1;
		dv=dv/2;
		if(Norm(z)>p) { v=v-dv } else { v=v+dv }
	}
	return z;
}

function AStudT(p,n) {
	var v=0.5;
	var dv=0.5;
	var t=0;
	while(dv>1e-6) {
		t=1/v-1;
		dv=dv/2;
		if(StudT(t,n)>p) {
			v=v-dv
		} else {
			v=v+dv 
		}
	}
	return t
}

function AFishF(p,n1,n2) {
	var v=0.5;
	var dv=0.5;
	var f=0;
	while(dv>1e-10) {
		f=1/v-1;
		dv=dv/2;
		if(FishF(f,n1,n2)>p) { v=v-dv } else { v=v+dv }
	}
	return f
}

function CalcNr(alfa) { var ztab=Fmt(ANorm(eval(alfa))); return ztab;}
function CalcTr(alfa, baris) { var ttab=Fmt(AStudT(eval(alfa),eval(baris))); return ttab; }
function CalcFr(alfa, baris, k) { var ftab=Fmt(AFishF(eval(alfa),eval(k-1),eval(baris-k))); return ftab; }

function Fmt(x) {
	var v;
	if(x>=0) { v=''+(x+0.00005) } else { v=''+(x-0.00005) }
	return v.substring(0,v.indexOf('.')+5);
}

function calculate(){
	var bad=0;
	var ht = $("#rs").handsontable('getInstance');
	var ht1 = $("#rb").handsontable('getInstance');
	
	var RSzerorow = countNonEmptyRows("#rs");
	var RBzerorow = countNonEmptyRows("#rb");

	ht.validateCells(function(result, obj) {
	    if(result == false) {
	    	bad++;
	    }
	})

	ht1.validateCells(function(result, obj) {
	    if(result == false) {
	    	bad++;
	    }
	})

	if(RSzerorow<=1){
		bad++;
	}

	if(RBzerorow<=1){
		bad++;
	}

	if(bad>0){
		alert("Mohon periksa kembali data yang anda masukkan.");
	}else{

	$("#in").addClass("inv");
	uneditablecell("#rs");
	textDisabled();

	var vbebas=$("#namavbebas").val();
	var vmediasi=$("#namavmediasi").val();
	var vterikat=$("#namavterikat").val();
	if(vbebas==""){
		vbebas="X";
	}

	if(vmediasi==""){
		vmediasi="M";
	}

	if(vterikat==""){
		vterikat="Y";
	}

	$(".varbebas").html(vbebas);
	$(".varmediasi").html(vmediasi);
	$(".varterikat").html(vterikat);

	var alfa= $("input[name='alfa']:checked"). val();
	var RSrowcount = countNonEmptyRows("#rs"); //n rs
	
	var RSsumX = sumColValue("#rs", 0, RSrowcount); //sigma x
    var RSsumM = sumColValue("#rs", 1, RSrowcount); //sigma m

    var RSsumXM = colMultipleCol("#rs", 0, 1, RSrowcount); //sigma xm

    var RSpowX = sumColPow("#rs", 0, RSrowcount); //sigma x kuardat
    var RSpowM = sumColPow("#rs", 1, RSrowcount); //sigma m kuardat

    var RSr = (RSrowcount*RSsumXM-(RSsumX*RSsumM))/Math.sqrt((RSrowcount*RSpowX-Math.pow(RSsumX,2))*(RSrowcount*RSpowM-Math.pow(RSsumM,2)));
    var RSr2 = Math.pow(RSr, 2)*100;
    var RSr2des = Math.pow(RSr, 2);

    var RSa= (RSsumM*RSpowX-(RSsumX*RSsumXM))/(RSrowcount*RSpowX-Math.pow(RSsumX,2));
    var RSb=(RSrowcount*RSsumXM-RSsumX*RSsumM)/(RSrowcount*RSpowX-Math.pow(RSsumX,2));

    if((RSa>=0)&&(RSb>=0)){
    	$("#answer").html("<br><h4>Koefisien Korelasi (r) : "+RSr.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RSr2des.toFixed(3)+" = "+RSr2.toFixed(3)+"%</h4>");
    }else if((RSa>=0)&&(RSb<0)){
   		$("#answer").html("<br><h4>Koefisien Korelasi (r) : "+RSr.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RSr2des.toFixed(3)+" = "+RSr2.toFixed(3)+"%</h4>");
    }else if((RSa<0)&&(RSb>=0)){
    	$("#answer").html("<br><h4>Koefisien Korelasi (r) : "+RSr.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RSr2des.toFixed(3)+" = "+RSr2.toFixed(3)+"%</h4>");
    }else{
    	 $("#answer").html("<br><h4>Koefisien Korelasi (r) : "+RSr.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RSr2des.toFixed(3)+" = "+RSr2.toFixed(3)+"%</h4>");
    }
   	
   	var RSjkt=RSpowM-(Math.pow(RSsumM,2)/RSrowcount);
   	var RSjkr=RSb*(RSsumXM-((RSsumX*RSsumM)/RSrowcount));
   	var RSjks=RSjkt-RSjkr;
   	var RSk=2;
   	var RSrkr=RSjkr/(RSk-1);
   	var RSrks=RSjks/(RSrowcount-RSk);
   	var RSf= RSrkr/RSrks;
   	var RSftab=CalcFr(alfa, RSrowcount, RSk);

   	if(RSf>RSftab){
   		$("#rskesimpulan").html("Kesimpulan :<br>Model regresi secara signifikan dapat digunakan untuk menganalisis data");
   	}else{
   		$("#rskesimpulan").html("Kesimpulan :<br>Model regresi secara signifikan tidak dapat digunakan untuk menganalisis data");
   	}
    
    $("#rsfketerangan").html("variabel bebas "+vbebas+"; variabel mediasi "+vmediasi);

    $("#rsf").removeClass("inv");
    $("#rsk-1").html(RSk-1);
    $("#rsjkr").html(RSjkr.toFixed(3));
    $("#rsrkr").html(RSrkr.toFixed(3));
    $("#rsfhit").html(RSf.toFixed(3));
    $("#rsftab").html(parseFloat(RSftab).toFixed(3));
    $("#rsn-k").html(RSrowcount-RSk);
    $("#rsjks").html(RSjks.toFixed(3));
    $("#rsrks").html(RSrks.toFixed(3));
    $("#rsn-1").html(RSrowcount-1);
    $("#rsjkt").html(RSjkt.toFixed(3));

    /*var RSsa= (Math.sqrt((RSpowM-RSa*RSsumM-RSb*RSsumXM)/RSrowcount-2)*Math.sqrt(RSpowX))/(Math.sqrt(RSrowcount*(RSpowX-Math.pow(RSsumX,2)/RSrowcount)));*/
    var RSsa= (Math.sqrt((RSpowM-RSa*RSsumM-RSb*RSsumXM)/(RSrowcount-2))*Math.sqrt(RSpowX))/Math.sqrt(RSrowcount*(RSpowX-Math.pow(RSsumX,2)/RSrowcount));
    var RSsb= (Math.sqrt((RSpowM-RSa*RSsumM-RSb*RSsumXM)/(RSrowcount-2)))/(Math.sqrt(RSpowX-Math.pow(RSsumX,2)/RSrowcount));
    var RSta=RSa/RSsa;
    var RStb=RSb/RSsb;
    var RSttab=CalcTr(alfa, RSrowcount-RSk);

    $("#rst").removeClass("inv");
    $("#rsa").html(RSa.toFixed(3));
    $("#rsb").html((RSb/100).toFixed(3));
    $("#rssa").html(RSsa.toFixed(3));
    $("#rssb").html((RSsb/100).toFixed(3));
    $("#rsta").html(RSta.toFixed(3));
    $("#rstb").html(RStb.toFixed(3));
    $("#rsttab").html(parseFloat(RSttab).toFixed(3));
    $("#rsketerangant").html("variabel bebas "+vbebas+"; variabel mediasi "+vmediasi);
    $("#rskesimpulant").html();

    if((RSta>RSttab)&&(RStb>RSttab)){
    	$("#rskesimpulant").html("Kesimpulan :<br><ol><li>Koefisien konstanta secara signifikan berpengaruh terhadap "+vmediasi+"</li><li>Koefisien "+vbebas+" secara signifikan berpengaruh terhadap "+vmediasi+"</li></ol>");
    }else if((RSta>RSttab)&&(RStb<=RSttab)){
    	$("#rskesimpulant").html("Kesimpulan :<br><ol><li>Koefisien konstanta secara signifikan berpengaruh terhadap "+vmediasi+"</li><li>Koefisien "+vbebas+" secara signifikan tidak berpengaruh terhadap "+vmediasi+"</li></ol>");
    }else if((RSta<=RSttab)&&(RStb>RSttab)){
    	$("#rskesimpulant").html("Kesimpulan :<br><ol><li>Koefisien konstanta secara signifikan tidak berpengaruh terhadap "+vmediasi+"</li><li>Koefisien "+vbebas+" secara signifikan berpengaruh terhadap "+vmediasi+"</li></ol>");
    }else{
    	$("#rskesimpulant").html("Kesimpulan :<br><ol><li>Koefisien konstanta secara signifikan tidak berpengaruh terhadap "+vmediasi+"</li><li>Koefisien "+vbebas+" secara signifikan tidak berpengaruh terhadap "+vmediasi+"</li></ol>");
    }

    //regresi berganda
   	uneditablecell("#rb");
   	var RBrowcount = countNonEmptyRows("#rb"); //n rb

   	var RBsumX = sumColValue("#rb", 0, RBrowcount);
    var RBsumM = sumColValue("#rb", 1, RBrowcount);
    var RBsumY = sumColValue("#rb", 2, RBrowcount);

    var RBavgX = RBsumX/RBrowcount;
    var RBavgM = RBsumM/RBrowcount;
    var RBavgY = RBsumY/RBrowcount;

    var RBsumXY = colMultipleCol("#rb", 0, 2, RBrowcount);
    var RBsumMY = colMultipleCol("#rb", 1, 2, RBrowcount);
    var RBsumXM = colMultipleCol("#rb", 0, 1, RBrowcount);

    var RBavgSumXY = RBsumXY/RBrowcount;
    var RBavgSumMY = RBsumMY/RBrowcount;
    var RBavgSumXM = RBsumXM/RBrowcount;

    var RBpowX = sumColPow("#rb", 0, RBrowcount);
    var RBpowM = sumColPow("#rb", 1, RBrowcount);
    var RBpowY = sumColPow("#rb", 2, RBrowcount);

    var RBavgPowX = sumColPow("#rb", 0, RBrowcount)/RBrowcount;
    var RBavgPowM = sumColPow("#rb", 1, RBrowcount)/RBrowcount;
    var RBavgPowY = sumColPow("#rb", 2, RBrowcount)/RBrowcount;

    var RBx2=RBpowX-Math.pow(RBsumX,2)/RBrowcount;
    var RBm2=RBpowM-Math.pow(RBsumM,2)/RBrowcount;
    var RBy2=RBpowY-Math.pow(RBsumY,2)/RBrowcount;
    var RBxy=RBsumXY-RBsumX*RBsumY/RBrowcount;
    var RBmy=RBsumMY-RBsumM*RBsumY/RBrowcount;
    var RBxm=RBsumXM-RBsumX*RBsumM/RBrowcount;

    var RBb1= (RBm2*RBxy-RBxm*RBmy)/(RBx2*RBm2-Math.pow(RBxm,2));
    var RBb2= (RBx2*RBmy-RBxm*RBxy)/(RBx2*RBm2-Math.pow(RBxm,2));
    var RBa= RBavgY-RBb1*RBavgX-RBb2*RBavgM;

    var RBry1=(RBrowcount*RBsumXY-RBsumX*RBsumY)/Math.sqrt((RBrowcount*RBpowX-Math.pow(RBsumX,2))*(RBrowcount*RBpowY-Math.pow(RBsumY,2)));
    var RBry2=(RBrowcount*RBsumMY-RBsumM*RBsumY)/Math.sqrt((RBrowcount*RBpowM-Math.pow(RBsumM,2))*(RBrowcount*RBpowY-Math.pow(RBsumY,2)));
    var RBr12=(RBrowcount*RBsumXM-RBsumX*RBsumM)/Math.sqrt((RBrowcount*RBpowX-Math.pow(RBsumX,2))*(RBrowcount*RBpowM-Math.pow(RBsumM,2)));

    var RBrsquare=(Math.pow(RBry1,2)+Math.pow(RBry2,2)-2*RBry1*RBry2*RBr12)/(1-Math.pow(RBr12,2));
    var RBkkorelasi= Math.sqrt(RBrsquare);
    var RBkdeterminasi= RBrsquare*100;

    if(RBb1>0 && RBb2>0){
    	$("#answer1").html("<br><h4>Koefisien Korelasi (r) : "+RBkkorelasi.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RBrsquare.toFixed(3)+" = "+RBkdeterminasi.toFixed(3)+"%</h4>");
    }else if(RBb1>0 && RBb2<=0){
        $("#answer1").html("<br><h4>Koefisien Korelasi (r) : "+RBkkorelasi.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RBrsquare.toFixed(3)+" = "+RBkdeterminasi.toFixed(3)+"%</h4>");
    }else if(RBb1<=0 && RBb2>0){
        $("#answer1").html("<br><h4>Koefisien Korelasi (r) : "+RBkkorelasi.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RBrsquare.toFixed(3)+" = "+RBkdeterminasi.toFixed(3)+"%</h4>");
    }else{
    	$("#answer1").html("<br><h4>Koefisien Korelasi (r) : "+RBkkorelasi.toFixed(3)+"<br>Koefisien Determinasi (r<sup>2</sup>) : "+RBrsquare.toFixed(3)+" = "+RBkdeterminasi.toFixed(3)+"%</h4>");
    }

    var RBk=3;
    var RBjkt= RBpowY-Math.pow(RBsumY,2)/RBrowcount;
    var RBjkr= RBb1*RBxy+RBb2*RBmy;
    var RBjkg= RBjkt-RBjkr;
    var RBrkr= RBjkr/(RBk-1);
    var RBrkg= RBjkg/(RBrowcount-RBk);
    var RBfhit= RBrkr/RBrkg;
    var RBftab=CalcFr(alfa, RBrowcount, RBk);

   	if(RBfhit>RBftab){
   		$("#rbkesimpulan").html("Kesimpulan :<br>Model regresi secara signifikan dapat digunakan untuk menganalisis data");
   	}else{
   		$("#rbkesimpulan").html("Kesimpulan :<br>Model regresi secara signifikan tidak dapat digunakan untuk menganalisis data");
   	}

   	$("#rbfketerangan").html("variabel bebas "+vbebas+"; variabel mediasi "+vmediasi+"; variabel terikat "+vterikat);

    $("#rbf").removeClass("inv");
    $("#rbk-1").html(RBk-1);
    $("#rbjkr").html(RBjkr.toFixed(3));
    $("#rbrkr").html(RBrkr.toFixed(3));
    $("#rbfhit").html(RBfhit.toFixed(3));
    $("#rbftab").html(parseFloat(RBftab).toFixed(3));
    $("#rbn-k").html(RBrowcount-RBk);
    $("#rbjks").html(RBjkg.toFixed(3));
    $("#rbrks").html(RBrkg.toFixed(3));
    $("#rbn-1").html(RBrowcount-1);
    $("#rbjkt").html(RBjkt.toFixed(3));

    var msres=(RBy2-RBb1*RBxy-RBb2*RBmy)/(RBrowcount-RBk);
    var r12=RBxm/Math.sqrt(RBx2*RBm2);

    //rata2 lalu pangkat
    RBpowAvgX= Math.pow(RBavgX,2);
    RBpowAvgM= Math.pow(RBavgM,2);

    //var RBsa=Math.sqrt(msres*((1/RBrowcount)+((RBavgPowX*RBm2+RBavgPowM*RBx2-2*RBavgX*RBavgM*RBxm)/(RBx2*RBm2-Math.pow(RBxm,2)))));
    var RBsa=Math.sqrt(msres*((1/RBrowcount)+((RBpowAvgX*RBm2+RBpowAvgM*RBx2-2*RBavgX*RBavgM*RBxm)/(RBx2*RBm2-Math.pow(RBxm,2)))));

    var RBsb1=Math.sqrt(msres/(RBx2*(1-Math.pow(r12,2))));
    var RBsb2=Math.sqrt(msres/(RBm2*(1-Math.pow(r12,2))));
    var RBta=RBa/RBsa;
    var RBtb1=RBb1/RBsb1;
    var RBtb2=RBb2/RBsb2;
    var RBttab=CalcTr(alfa, RBrowcount-RBk);

    $("#rbt").removeClass("inv");
    $("#rba").html(RBa.toFixed(3));
    $("#rbb1").html((RBb1/100).toFixed(3));
    $("#rbb2").html(RBb2.toFixed(3));
    $("#rbsa").html(RBsa.toFixed(3));
    $("#rbsb1").html((RBsb1/100).toFixed(3));
    $("#rbsb2").html(RBsb2.toFixed(3));
    $("#rbta").html(RBta.toFixed(3));
    $("#rbtb1").html(RBtb1.toFixed(3));
    $("#rbtb2").html(RBtb2.toFixed(3));
    $("#rbttab").html(parseFloat(RBttab).toFixed(3));
    $("#rbketerangant").html("variabel bebas "+vbebas+"; variabel mediasi "+vmediasi+"; variabel terikat "+vterikat);

    if(RBta>RBttab){
    	$("#kesimpulant1").html("Koefisien konstanta secara signifikan berpengaruh terhadap "+vterikat+"");
    }else{
    	$("#kesimpulant1").html("Koefisien konstanta secara signifikan tidak berpengaruh terhadap "+vterikat+"");
    }

    if(RBtb1>RBttab){
    	$("#kesimpulant2").html("Koefisien "+vbebas+" secara signifikan berpengaruh terhadap "+vterikat+"");
    }else{
    	$("#kesimpulant2").html("Koefisien "+vbebas+" secara signifikan tidak berpengaruh terhadap "+vterikat+"");
    }

    if(RBtb2>RBttab){
    	$("#kesimpulant3").html("Koefisien "+vmediasi+" secara signifikan berpengaruh terhadap "+vterikat+"");
    }else{
    	$("#kesimpulant3").html("Koefisien "+vmediasi+" secara signifikan tidak berpengaruh terhadap "+vterikat+"");
    }

    //analisis jalur
    $("#analisis").removeClass("inv");
    var e1=Math.sqrt(1-RSr2/100);
    var e2=Math.sqrt(1-RBrsquare);

    if(e1<0){
    	$("#e1").html("("+e1.toFixed(3)+")");
    }else{
    	$("#e1").html(e1.toFixed(3));
    }

    if(RBb2<0){
    	$("#p3").html("("+RBb2.toFixed(3)+")");
    }else{
    	$("#p3").html(RBb2.toFixed(3));
    }

    if(e2<0){
    	$("#e2").html("("+e2.toFixed(3)+")");
    }else{
    	$("#e2").html(e2.toFixed(3));
    }

    $("#p2").html((RSb/100).toFixed(3));
    $("#p1").html((RBb1/100).toFixed(3));
    $("#p1xy").html(RBb1.toFixed(3));

    var p2xp3=(RSb/100).toFixed(3)*RBb2.toFixed(3);
    var p1p2xp3=(RBb1/100)+p2xp3;

    $("#p2xp3").html(p2xp3.toFixed(3));
	$("#p1p2xp3").html(p1p2xp3.toFixed(3));
	//alert(p2xp3);
	

	var sp2p3=Math.sqrt(Math.pow(RBb2.toFixed(3),2)*Math.pow((RSsb/100).toFixed(3),2)+Math.pow((RSb/100).toFixed(3),2)*Math.pow(RBsb2.toFixed(3),2)+Math.pow((RSsb/100).toFixed(3),2)*Math.pow(RBsb2.toFixed(3),2));
	var ajthitung=p2xp3/sp2p3;
	var ajttabel=CalcTr(alfa, RBrowcount-RBk);
	//alert(sp2p3);
	
	$("#sp2p3").html("<center>"+sp2p3.toFixed(3)+"</center>");
	$("#ajthitung").html("<center>"+ajthitung.toFixed(3)+"</center>");
	$("#ajttabel").html("<center>"+parseFloat(ajttabel).toFixed(3)+"</center>");

	if(ajthitung>ajttabel){
		$("#ajkesimpulan").html("Kesimpulan :<br>Koefisien mediasi memiliki pengaruh yang signifikan");
	}else{
		$("#ajkesimpulan").html("Kesimpulan :<br>Koefisien mediasi tidak memiliki pengaruh yang signifikan");
	}

	}


}

$("#kumpul").click(function(){
	calculate();

	$("input[type=radio]").click(function(){
		calculate();
	})
});


</script>

</html>
