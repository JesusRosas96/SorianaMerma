            <style type="text/css">
                  @font-face {
                    font-family: SourceSansPro;
                    src: url(SourceSansPro-Regular.ttf);
                  }

                  .clearfix:after {
                    content: "";
                    display: table;
                    clear: both;
                  }

                  a {
                    color: #0087C3;
                    text-decoration: none;
                  }

                  .body {
                    position: relative;
                    width: 21cm;  
                    height: 29.7cm; 
                    margin: 0 auto; 
                    color: #555555;
                    background: #FFFFFF; 
                    font-size: 14px; 
                    font-family: SourceSansPro;
                  }

                  .head {
                    padding: 10px 0;
                    margin-bottom: 20px;
                    border-bottom: 1px solid #AAAAAA;
                  }

                  #logo {
                    float: left;
                    margin-top: 8px;
                  }

                  #logo img {
                    height: 70px;
                  }

                  #company {
                    position: absolute;
                    float: right;
                    text-align: right;
                  }


                  #details {
                    margin-bottom: 50px;
                  }

                  #client {
                    padding-left: 6px;
                    border-left: 6px solid #0087C3;
                    float: left;
                  }

                  #client2 {
                    padding-right: : 6px;
                    border-right: : 6px solid #0087C3;
                    float: right;
                  }

                  #client .to {
                    color: #777777;
                  }

                  .name {
                    font-size: 1.4em;
                    font-weight: normal;
                    margin: 0;
                    color: #555555;
                  }

                  .cuerpo {
                    font-size: 1.1em;
                    font-weight: normal;
                    margin: 0;
                    color: #555555;
                  }

                  #invoice {
                    position: relative;
                    float: right;
                    text-align: right;
                  }

                  #invoice h1 {
                    color: #0087C3;
                    font-size: 1.5em;
                    line-height: 1em;
                    font-weight: normal;
                    margin: 0  0 10px 0;
                  }

                  #invoice .date {
                    font-size: 1.1em;
                    color: #777777;
                  }

                  table {
                    width: 100%;
                    border-collapse: collapse;
                    border-spacing: 0;
                    margin-bottom: 20px;
                  }

                  table th,
                  table td {
                    padding: 6px;
                    background: #EEEEEE;
                    text-align: center;
                    border-bottom: 1px solid #FFFFFF;
                  }

                  table th {
                    white-space: nowrap;        
                    font-weight: normal;
                  }

                  table td {
                    text-align: right;
                  }

                  table td h3{
                    color: #57B223;
                    font-size: 1.2em;
                    font-weight: normal;
                    margin: 0 0 0.2em 0;
                  }

                  table .no {
                    color: #FFFFFF;
                    font-size: 1.6em;
                    background: #57B223;
                  }

                  table .desc {
                    text-align: left;
                  }

                  table .unit {
                    background: #DDDDDD;
                  }

                  table .qty {
                  }

                  table .total {
                    background: #57B223;
                    color: #FFFFFF;
                  }

                  table td.unit,
                  table td.qty,
                  table td.total {
                    font-size: 1.2em;
                  }

                  table tbody tr:last-child td {
                    border: none;
                  }

                  table tfoot td {
                    padding: 10px 20px;
                    background: #FFFFFF;
                    border-bottom: none;
                    font-size: 1.2em;
                    white-space: nowrap; 
                    border-top: 1px solid #AAAAAA; 
                  }

                  table tfoot tr:first-child td {
                    border-top: none; 
                  }

                  table tfoot tr:last-child td {
                    color: #57B223;
                    font-size: 1.4em;
                    border-top: 1px solid #57B223; 

                  }

                  table tfoot tr td:first-child {
                    border: none;
                  }

                  #thanks{
                    font-size: 2em;
                    margin-bottom: 50px;
                  }

                  #notices{
                    padding-left: 6px;
                    border-left: 6px solid #0087C3;  
                  }

                  #notices .notice {
                    font-size: 1.2em;
                  }

                  .footer {
                    color: #777777;
                    width: 100%;
                    height: 30px;
                    position: absolute;
                    bottom: 2;
                    border-top: 1px solid #AAAAAA;
                    padding: 8px 0;
                    text-align: center;
                  }
            </style>

            <?php  
              if(!$_SESSION){
                header ("Location: ../Merma/index.html");
              }
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "soriana670";
              $conn= new mysqli($servername, $username, $password, $dbname);
              mysqli_select_db($conn, "soriana670");
              $a= $_SESSION['Folio'];
              $valor=mysqli_query($conn, "SELECT * FROM acta WHERE folio= '$a';");
              $row2= mysqli_fetch_array($valor);
              $b= $row2['codigoPro']; 
              $valor2=mysqli_query($conn, "SELECT * FROM producto WHERE codigo= '$b';");
              $row3= mysqli_fetch_array($valor2);
            ?>

            <page>
              <div class="body">
                <div class="head">
                <div class="clearfix">
                  <div id="logo">
                    <img src="../Merma/img/logosor.png">
                  </div>
                  <div class="company">
                    <div class="name">Soriana</div>
                    <div class="cuerpo">Av. Universidad Veracruzana KM 10, Coatzacoalcos, 96536, Mexico</div>
                    <div class="cuerpo">Plaza Acaya</div>
                    <div><a href="mailto:soriana670@gmail.com">soriana670@gmail.com</a></div>
                  </div>
                </div>
                </div>
               <div>
                  <div id="details" class="clearfix">
                    <div id="client"> 
                      <div class="to">DATOS DE LA DEVOLUCIÓN:</div>
                      <?php echo 
                      '<div>Área: '.$row2['area'].'</div> 
                      <div>Responsable: '.$row2['proveedor'].'</div>
                      <div>Medio: '.$row2['formaEnvio'].'</div>
                      <div>Alejandro Aguilando Zavala</div>
                      <div class="email"><a href="mailto:alagza.aaz@gmail.com">alagza.aaz@gmail.com</a></div>
                    </div>
                    <div id="invoice">
                      <h1>ACTA DE DEVOLUCIÓN</h1>
                      <div class="to">Fecha de Emisión: '.date("d/m/Y",strtotime($row2['fechaEm'])).'</div>
                      <div class="to">Fecha de Destrucción: '.date("d/m/Y",strtotime($row2['fechaEm']."+ 7 days")).'</div>
                    </div>
                  </div>
                  <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                      <tr>
                        <th class="no">#</th>
                        <th class="desc">NOMBRE DEL PRODUCTO</th>
                        <th class="unit">PRECIO</th>
                        <th class="qty">PRODUCTO ENTREGADO</th>
                        <th class="unit">PRODUCTO REGRESADO</th>
                        <th class="total">PRODUCTO NETO</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="no">'.$row2['codigoPro'].'</td>

                        <td class="desc"><h3>'.$row3['nombre'].'</h3></td>
                        <td class="unit">$'.$row3['precio'].'.00</td>
                        <td class="qty">'.$row2['prodEntre'].'</td>
                        <td class="unit">'.$row2['prodRegre'].'</td>
                        <td class="total">'.($row2['prodEntre'] - $row2['prodRegre']).'</td>
                      </tr>
                    </tbody>
                  </table>
                  <div id="thanks">DEPARTAMENTO DE CONTROL DE MERMA</div>
                  <div id="notices">
                    <div>MOTIVO:</div>
                    <div class="notice">'.$row2['motivo'].'</div>
                  </div>
                </div>'
                ?>
              </div>
              <div class="footer">
                  Soriana mantiene las actas de devolución con un lapso de 7 dias, al pasar dicho tiempo son convertidas en actas de destrucción.
              </div>
            </page>