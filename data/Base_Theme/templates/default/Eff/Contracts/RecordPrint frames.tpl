<table border="0" cellpadding="3">
  <tr>
    <td style="width:50%;text-align:left;">{$salutation}</td><td style="width:50%;text-align:right;">{$data_wyceny}</td>
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
      <td style="width:70px; text-align:center;font-weight: bold;">{$qty}</td>
      <td style="width:70px; text-align:center;font-weight: bold;">{$price}</td>
    </tr>
  {foreach from=$constructions item=field}
    <tr>
      <td style="text-align:right;">{$field.lp}</td>
      <td>{$field.item}</td>
      <td style="text-align:center;">{$field.jm}</td>
      <td style="text-align:center;">{$field.qty}</td>
      <td style="text-align:center;">{$field.price}</td>
    </tr>
  {/foreach}
</table>
{/if}
<table border="0" cellpadding="3">
  
  <tr><td style="width:100%;text-align:left;">&nbsp;</td></tr>
  <tr>
    <td style="width:100%;text-align:left;font-weight: bold;">{$conditions}</td>
  </tr>
</table>
{if count($condition_list)}
<table border="0" cellpadding="3">
    {foreach from=$condition_list item=field}
        <tr>
          <td style="width:30px;text-align:right;font-weight: bold;font-size:smaller;">{$field.label}</td>{$field.value}
        </tr>
    {/foreach}
</table>
{/if}

{if count($frames)}
<br />
<table border="0.1" cellpadding="2"  nobr="true">
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">LP</td>
      <td style="width:450px;text-align:center;font-weight: bold;font-size:smaller;">RAMKI - kalkulacja za m<sup>2</sup> szyby za każdą komorę     [PLN/m<sup>2</sup>]</td>
      <td style="width:50px; text-align:center;font-weight: bold;font-size:smaller;">Cena PLN/m<sup>2</sup></td>
    </tr>
  {foreach from=$frames item=field}
    <tr>
      <td style="text-align:right;font-size:smaller;">{$field.lp}</td>
      <td style="text-align:left;font-size:smaller;">{$field.item}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t1}</td>
    </tr>
  {/foreach}
</table>
{/if}

{if count($glazing_bar)}
<br />
<table border="0.1" cellpadding="2"  nobr="true">
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">LP</td>
      <td style="width:450px;text-align:center;font-weight: bold;font-size:smaller;">SZPROSY MIĘDZYSZYBOWE - kalkulacja za 1 pole, ramka minimum 12 mm<br />*według standardowego próbnika szprosów EFFECT GLASS</td>
      <td style="width:50px; text-align:center;font-weight: bold;font-size:smaller;">Cena PLN/pole</td>
    </tr>
  {foreach from=$glazing_bar item=field}
    <tr>
      <td style="text-align:right;font-size:smaller;">{$field.lp}</td>
      <td style="text-align:left;font-size:smaller;">{$field.item}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t1}</td>
    </tr>
  {/foreach}
</table>
{/if}


<br />
<table border="0.1" cellpadding="2" style="margin-left:20px;"  nobr="true">
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">LP</td>
      <td style="width:450px;text-align:center;font-weight: bold;font-size:smaller;">GAZ TECHNICZNY w przestrzeni międzyszybowej - kalkulacja za m<sup>2</sup> szyby [PLN/m<sup>2</sup>] - szerokość ramki</td>
      <td style="width:50px; text-align:center;font-weight: bold;font-size:smaller;">Cena PLN/m<sup>2</sup></td>
    </tr>
    <tr>
      <td style="text-align:right;font-size:smaller;">1</td>
      <td style="text-align:left;font-size:smaller;">KRYPTON w 90% przestrzeni w szybie za każdą komorę od 6 - 8mm</td>
      <td style="text-align:center;font-size:smaller;">70</td>
    </tr>
    <tr>
      <td style="text-align:right;font-size:smaller;">2</td>
      <td style="text-align:left;font-size:smaller;">KRYPTON w 90% przestrzeni w szybie za każdą komorę od 10 - 12mm</td>
      <td style="text-align:center;font-size:smaller;">84</td>
    </tr>
</table>

{if count($millings)}
<br />
<table border="0.1" cellpadding="2"  nobr="true">
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">&nbsp;</td>
      <td style="width:250px;text-align:center;font-weight: bold;font-size:smaller;">OBRÓBKI SZKŁA POJEDYNCZEGO</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">2</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">3</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">4</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">5</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">6</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">8</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">10</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">12</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">15</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">19</td>
    </tr>
  {foreach from=$millings item=field}
    <tr>
      <td style="text-align:right;font-size:smaller;">{$field.lp}</td>
      <td style="text-align:left;font-size:smaller;">{$field.item}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t1}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t2}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t3}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t4}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t5}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t6}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t7}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t8}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t9}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t10}</td>
    </tr>
  {/foreach}
</table>
{/if}
{if count($millings_lam)}
<br />
<table border="0.1" cellpadding="2"  nobr="true">
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">&nbsp;</td>
      <td style="width:250px;text-align:center;font-weight: bold;font-size:smaller;">OBRÓBKI SZKŁA LAMINOWANEGO</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">4</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">6</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">8</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">10</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">12</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">16</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">20</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">24</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">30</td>
      <td style="width:25px; text-align:center;font-weight: bold;font-size:smaller;">38</td>
    </tr>
  {foreach from=$millings_lam item=field}
    <tr>
      <td style="text-align:right;font-size:smaller;">{$field.lp}</td>
      <td style="text-align:left;font-size:smaller;">{$field.item}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t1}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t2}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t3}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t4}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t5}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t6}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t7}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t8}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t9}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t10}</td>
    </tr>
  {/foreach}
</table>
{/if}

{if count($racks)}
<br />

<table border="0.1" cellpadding="2"  nobr="true">
    <tr><td colspan=7 style="width:520px;text-align:center;">Cennik stojaków drewnianych bezzwrotnych</td></tr>
    <tr>
      <td style="width:20px; text-align:center;font-weight: bold;font-size:smaller;">LP</td>
      <td style="width:100px; text-align:center;font-weight: bold;font-size:smaller;">Typ stojaka</td>
      <td style="width:80px; text-align:center;font-weight: bold;font-size:smaller;">Szerokość mm</td>
      <td style="width:80px; text-align:center;font-weight: bold;font-size:smaller;">Wysokość mm</td>
      <td style="width:80px; text-align:center;font-weight: bold;font-size:smaller;">Ładowność maksymalna kg</td>
      <td style="width:80px; text-align:center;font-weight: bold;font-size:smaller;">Miejsce załadunku mm</td>
      <td style="width:80px; text-align:center;font-weight: bold;font-size:smaller;">SPRZEDAŻ PLN/szt. netto</td>
    </tr>
  {foreach from=$racks item=field}
    <tr>
      <td style="text-align:right;font-size:smaller;">{$field.lp}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t1}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t2}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t3}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t4}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t5}</td>
      <td style="text-align:center;font-size:smaller;">{$field.t6}</td>
    </tr>
  {/foreach}

</table>
{/if}

<br />
<br />
<table border="0" cellpadding="3">
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