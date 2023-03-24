<style type="text/css"> body{
width:100%!important;
font-size:12px;
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif!important;
}
*{
 font-family: "Helvetica Neue",Helvetica,Arial,sans-serif!important;
}
.container{
  width: 700px;
}
.outer_border{
border:1px solid #999999!important;
padding:4%!important;
margin-bottom:2%!important;
}
.top_box{
padding:0%
 }
.table_pad{
padding:0% 2%;
} 
.border{
border:1px solid #CCCCCC!important;
}
.small_text{
font-size:10px!important;
}
.bg_color1{
  background:#3a5082;
  color: #fff;
 }
.text_color1{
  color:#3a5082;
 }
 td{
 padding:4px;
 } 
 </style> 
 <div class="container">
    <div class="outer_border"> 
        <div class="row"> <div  class=" pull-left top_box   p-4"> 
        <h2 style="color:#687cbf;font-weight: bold;font-size:30px; text-align:center; padding-right: 30px;" id="invoice">INVOICE</h2> 
        <center><h2 class="text_color1" style="font-size:30px">SAPTHAZEAL PRIVATE LIMITED</h2> 
            ROSHNI HOUSE,POONTHI ROAD,<br/>
            KUMARAPURAM,<br/>
            MEDICAL COLLEGE.P.O<br/>
            THIRUVANANTHAPURAM <center>
        </div> 
        <div>
        <br/><br/>
        <div style="" class=" pull-right top_box   p-4"> 
            <table width="100%" height="70" border="0" class="table_pad">
                <tr> 
                    <td>Date</td> 
                    <td> 
                        <?php $invoice_date = date('jS F Y', strtotime($order->created_at)); 
                        echo  $invoice_date;?> 
                    </td>
                </tr>
                <tr> 
                    <td width="50%">Invoice No</td> 
                    <td width="50%">{{$order->order_id}}</td> 
                </tr> 
                <tr> 
                    <td>Customer Name</td> 
                    <td>{{$order->jobprovider->name}}</td> 
                </tr> 
            </table>
        </div> 
    </div> 
    <br/><br/>
    <div class="row"> 
        <div class=""> 
            <table width="100%" border="0">
                <tr> 
                    <td colspan="2">
                        <div class="bg_color1" style="text-indent:10px;font-size: 14px;width: 50%;height: 26px;line-height: 24px; ">BILL TO </div> 
                        <table width="100%" border="0"> 
                            <tr> 
                                <td width="18%">Name</td> 
                                <td width="82%">{{$order->jobprovider->company_name}} </td> 
                            </tr> 
                            <tr> 
                                <td>Phone</td> 
                                <td>{{$order->jobprovider->mobile}}</td> 
                            </tr> 
                            <tr> 
                                <td> Address</td> 
                                <td>{{$order->jobprovider->address}} ,
                                 </td> 
                            </tr> 
                        </table> 
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="2"> </td> 
                </tr> 
            </table> 
        </div> 
    </div> 
    <dd style="clear:both;"></dd>
    <div class="row"> 
        <table height="82" class=" " border="1" style=" width:100%;"> 
            <tr class="bg_color1"> 
                <td width="58%" height="12" style="padding-left: 10px;">DESCRIPTION</td> 
                <td width="13%">&nbsp;</td> <td style="padding-right: 10px;" width="15%" align="right">AMOUNT</td> 
            </tr> 
           <tr class=" "> 
                <td> {{$order->subscription->name}} </td> 
                <td>&nbsp;</td> 
                <td align="right">Rs. {{$order->subscription->amount }}</td> 
            </tr> 
            <tr class=" "> 
                <td>&nbsp;</td> 
                <td> <strong>Total</strong> </td> 
                <td align="right">Rs.{{$order->subscription->amount }}</td> 
            </tr> 
        </table>
    </div> 
    <div class="row"> 
        <div  style="text-align:center">  
            <br /> J.K.Sreekumar, Operation Manager<br /> 
            <b>Thank You For Your Business!</b> 
        </div> 
    </div> 
</div> 
</div> 