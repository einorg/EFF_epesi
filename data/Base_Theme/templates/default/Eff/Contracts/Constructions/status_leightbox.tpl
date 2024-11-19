<center>
<br>
{$form_open}
<table id="CRM_Filters" cellpadding="0" style="width:70%;cell-spacing:3px;">
	<tr>
        <td class="epesi_label" style="width:20%;">
        	{$form_resolution.label}
		</td>
		<td class="epesi_data" style="width:80%;">
			<div style="construction:relative;">
				{$resolution_required_error}
				{$form_resolution.html}
			</div>
		</td>
	</tr>
	<tr>
        <td class="epesi_label">
        	{$form_note.label}
		</td>
		<td class="epesi_data textarea">
			{$form_note.html}</div>
        </td>
	</tr>
</table>

<table id="CRM_Filters" cellspacing="0" cellpadding="0">
	<tr>
        <td id="construction_status_new_button">
			{$mark_new.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/mark_as_new.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$mark_new.text}</span>
			</div>
			{$mark_new.close}
		</td>

        </td>
        <td id="construction_status_reopen_button">
			{$reopen.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/reopen.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$reopen.text}</span>
			</div>
			{$reopen.close}
        </td>
        <td id="construction_status_in_progress_button">
			{$in_progress.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/in_progress.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$in_progress.text}</span>
			</div>
			{$in_progress.close}
        </td>
        <td id="construction_status_on_hold_button">
			{$on_hold.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/on_hold.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$on_hold.text}</span>
			</div>
			{$on_hold.close}
        </td>
        <td id="construction_status_resolve_button">
			{$resolve.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/resolved.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$resolve.text}</span>
			</div>
			{$resolve.close}
        </td>
        <td id="construction_status_feedback_button">
			{$feedback.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/feedback.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$feedback.text}</span>
			</div>
			{$feedback.close}
        </td>
        <td id="construction_status_close_button">
			{$close.open}
			<div class="epesi_big_button">
				<img src="{$theme_dir}/Eff/Contracts/Constructions/closed.png" alt="" align="middle" border="0" width="32" height="32">
				<span>{$close.text}</span>
			</div>
			{$close.close}
        </td>
    </tr>
</table>
{$form_close}

</center>
