<table border="0" cellpadding="3">
  <tr>
    <td style="width:50%;text-align:left;">{$salutation}</td>
    <td style="width:50%;text-align:right;">{$data_wyceny}</td>
  </tr>
</table>
  <table border="0" cellpadding="3">
  <tr>
    <td style="width:10px;"></td><td style="width:100%;text-align:left;">{$customer_name}</td>
  </tr>
  <tr>
    <td style="width:10px;"></td><td style="width:100%;text-align:left;">{$customer_company} {$customer_locality}</td>
  </tr>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
</table>
</table>
<table border="0" cellpadding="3">
  <tr><td style="width:100%;text-align:center;">{$header1}</td></tr>
  <tr><td style="width:100%;text-align:center;">{$header2}</td></tr>
  <tr><td style="width:100%;text-align:left;">{$header3}</td></tr>
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
</table>
{if $no_access}<div style="color:red; font-weight: bold">{"Access forbidden"|t}</div>{/if}
{if count($constructions)}
<table border="0.1" cellpadding="3" >
    <tr>
      <td style="width:30px; text-align:center;font-weight: bold;">{$lp}</td>
      <td style="width:400px;text-align:center;font-weight: bold;">{$item}</td>
      <td style="width:70px; text-align:center;font-weight: bold;">{$jm}</td>
      <td style="width:60px; text-align:center;font-weight: bold;">{$qty}</td>
      <td style="width:80px; text-align:center;font-weight: bold;">{$price}</td>
    </tr>
  {foreach from=$constructions item=field}
    <tr>
      <td style="text-align:right;">{$field.lp}</td>
      <td>{$field.item}</td>
      <td style="text-align:center;">{$field.jm}</td>
      <td style="text-align:right;">{$field.qty}</td>
      <td style="text-align:center;">{$field.price}</td>
    </tr>
  {/foreach}
</table>
{/if}

{if $print_summary != ''}
<table border="none" cellpadding="3" style="">
    <tr>
      <td style="width:6400px;text-align:center;font-weight: bold;"> </td>
    </tr>
</table>
<table border="0.1" cellpadding="2" style="">
    <tr>
      <td style="width:500px; text-align:right;font-weight: bold;">{$summary_title}</td>
      <td style="width:60px; text-align:right;font-weight: normal;">{$summary_qty}</td>
      <td style="width:80px; text-align:right;font-weight: normal;">{$summary_price}</td>
    </tr>
</table>
{/if}

<table border="0" cellpadding="3">
  {if $transport != ''}
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
  <tr>
    <td style="width:100%;text-align:left;">{$transport}</td>
  </tr>
  {/if}
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
  <tr>
    <td style="width:100%;text-align:left;font-weight: bold;">{$conditions}</td>
  </tr>
</table>
    
{if count($condition_list)}
<table border="0" cellpadding="3" >
    {foreach from=$condition_list item=field}
        <tr>
          <td style="width:30px;text-align:right;font-weight: bold;font-size:smaller;">{$field.label}</td>{$field.value}
        </tr>
    {/foreach}
</table>
{/if}

<br />
<br />
<table border="0" cellpadding="3" >
  <tr>
    <td style="width:50px;">&nbsp;</td>
    <td style="width:300px;text-align:left;">{$footer_title}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;">{$footer_name}</td>
  </tr>
  {if $footer_tel<>""}
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;">{$footer_tel}</td>
  </tr>
  {/if}
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:left;">{$footer_mail}</td>
  </tr>
</table>