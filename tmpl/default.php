<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="whatschat whatschat-<?php echo $module->id; ?>" style="z-index:99999;width:300px;position:fixed;bottom:15px;right:30px;">
		<div class="wc-inner" style="display:none;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.4);">
				<div class="header" style="text-align:left;position:relative;background:#0DC153;color:#fff;padding:15px 30px 15px 15px;border-top-left-radius:10px;border-top-right-radius:10px;">
						<?php echo $params->get('texto_cabecalho'); ?>
						<span class="fa fa-close" onclick="jQuery('.wc-inner').hide();" style="cursor:pointer;position:absolute;top:15px;right:15px;"></span>
				</div>
				<div class="contacts" style="display:block;background:#fff;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
						<?php $contatos = json_decode($params->get('contatos')); ?>
						<?php if($contatos->foto): ?>
						<?php foreach($contatos->foto as $key => $foto): ?>
						<a href="<?php echo $contatos->telefone[$key]; ?>" class="contact" style="cursor:pointer;color:#1f1f1f;border-top:2px solid #dfdfdf;display:flex;align-items:center;text-decoration:none;" target="_bblank">
								<?php if($foto): ?>
								<div class="left" style="width:60px;margin:15px 0 15px 15px;">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAALElEQVR42u3NMQEAAAwCoNm/9DL4eEEBcgORSCQSiUQikUgkEolEIpFIJJ0HCt8AM0IRFnUAAAAASUVORK5CYII=" 
												style="border-radius:50px;width:100%;height:auto;background-size:cover;background-repeat:no-repeat;background-position:center;background-image:url('<?php echo JUri::base() . $foto; ?>')" />
								</div>
								<?php endif; ?>
								<div class="right" style="text-align:left;margin-left:15px;">
										<?php if($contatos->departamento[$key]): ?>
										<div class="departament">
												<?php echo $contatos->departamento[$key]; ?>
										</div>
										<?php endif; ?>

										<?php if($contatos->nome[$key]): ?>
										<strong class="name">
										<?php echo $contatos->nome[$key]; ?>
										</strong>
										<?php endif; ?>
								</div>
						</a>
						<?php endforeach; ?>
						<?php endif; ?>
				</div>
				<!-- <span style="float:right;text-shadow:0 0 10px rgba(0,0,0,0.4);display:block;clar:both;" class="fas fa-caret-down"></span> -->
		</div>
		<div class="button" onclick="jQuery('.wc-inner').toggle();" style="cursor:pointer;margin-top: 15px;background:#0DC153;color:#fff;padding:10px 15px;border-radius:50px;display: table;float: right;text-transform:uppercase;font-size:14px;box-shadow:0 0 10px rgba(0,0,0,0.4);">
				<span class="fa fa-whatsapp" style="font-size: 24px;float: left;margin-right: 5px;"></span> <strong class="wc-hmb"><?php echo $params->get('texto_botao'); ?></strong>
		</div>
</div>
<style>@media all and (max-width: 800px){.wc-hmb{display:none}}</style>
