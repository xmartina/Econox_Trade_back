{$page_name = 'Deposit'}
{$external_base_url = "https://qfsholdings.io/"}
{$base_url = "https://account.econoxtrades.online/"}
{$home_url = "https://econoxtrades.online/"}
{$home_url = 'https://econoxtrades.online/'}
{$site_url = 'https://account.econoxtrades.online/'}
{$site_name = 'Quantum Ledger Financial System'}
{$site_logo = 'https://econoxtrades.online/assets/imgs/qfs.png'}
{assign var="login_url" value="{$site_url}?a=login"}
{assign var="favicon_url" value="{$home_url}assets/imgs/qfsicon.png"}

{include file="back_header.tpl"}

{if $ok == 1}
<h3>Please confirm your deposit:</h3><br><br>

{$description}<br><br>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
{if $deposit.id > 0}
<tr>
 <th>Plan:</th>
 <td>{$deposit.name|escape:html}</td>
</tr>
<tr>
 <th>Profit:</th>
 <td>{$deposit.percent}% {if $deposit.period == 'end'}after {$deposit.periods} days{else}{$deposit.period_name} for {$deposit.periods} {$deposit.time_units}{if $deposit.time_units != 1}s{/if} {if $deposit.work_week}(mon-fri){/if}{/if}</td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td>{if $deposit.principal_return}Yes{if $deposit.principal_return_hold_percent > 0}, with {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}{else}No (included in profit){/if}</td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
{if $deposit.principal_withdraw}Available with 
{foreach from=$deposit.principal_withdraw_terms item=t name=wpt}
{$t.percent}% fee {if $t.duration > 0}after {$t.duration} days{/if}{if !$smarty.foreach.wpt.last} or {/if}
{/foreach}
{if $deposit.principal_withdraw_duration_max} but before {$deposit.principal_withdraw_duration_max|number_format} days{/if}
{else}Not available{/if}
 </td>
</tr>
{if $deposit.use_compound == 1}
<tr>
 <th>Compound:</th>
 <td>{$deposit.compound|number_format}%</td>
</tr>
{/if}
{/if} {* $deposit.id *}
{if $deposit.converted_amount}
<tr>
 <th>Amount:</th>
 <td>{$currency_sign}{$deposit.converted_amount}</td>
</tr>
<tr>
 <th>{$deposit.converted_fiat} Amount:</th>
 <td>{$deposit.amount|number_format:2}</td>
</tr>
{else}
<tr>
 <th>Amount:</th>
 <td>{$currency_sign}{$deposit.amount}</td>
</tr>
{/if}
</table>
<br><br>
<form name=spend method=post>
<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value={$type}>
<input type=hidden name=h_id value={$h_id}>
<input type=hidden name=compound value={$compound}>
<INPUT type=hidden name=amount value="{$famount}">
{if $fields}
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2><b>Required Information:</b></td>
</tr>
{section name=f loop=$fields}
<tr>
 <td>{$fields[f].name}</td>
 <td><input type="text" name="fields[{$fields[f].id}]" value="" class=inpts></td>
</tr>
{/section}
</table>
{/if}

<br><input type=submit value="Save" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

{else}

{if $max_deposit_less == 1}
Sorry, the maximal deposit is {$max_deposit_format}.<br>
{/if} 
{if $wrong_paln == 1} The Plan does not exist. {/if} 
{if $not_enough_funds == 1} You have not enough funds to complete the operation.<br>{/if}
{if $less_for_bankwire == 1}
The minimal spend amount for Bank Wire is {$currency_sign}{$min_amount}.<br>
{/if}
{if $less_than_min == 1}
The minimal spend amount for '{$plan_name}' is {$currency_sign}{$min_amount}.<br>
{/if}
{if $zero_amount}
You should enter amount grater than zero.<br>
{/if}

<br>
Click <a href="?a=deposit">here</a> and try again.


{/if}

{include file="back_footer.tpl"}

