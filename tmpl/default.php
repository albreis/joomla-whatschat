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
						<span onclick="jQuery('.wc-inner').hide();" style="cursor:pointer;position:absolute;top:15px;right:15px;"><svg xmlns="http://www.w3.org/2000/svg" style="width:16px" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg></span>
				</div>
				<div class="contacts" style="display:block;background:#fff;border-bottom-left-radius:10px;border-bottom-right-radius:10px;">
						<?php $contatos = $params->get('contatos'); ?>
						<?php foreach($contatos as $contato): ?>
						<a href="<?php echo $contato->telefone; ?>" class="contact" style="cursor:pointer;color:#1f1f1f;border-top:2px solid #dfdfdf;display:flex;align-items:center;text-decoration:none;" target="_bblank">
								<?php if($contato->foto): ?>
								<div class="left" style="width:60px;margin:15px 0 15px 15px;">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAALElEQVR42u3NMQEAAAwCoNm/9DL4eEEBcgORSCQSiUQikUgkEolEIpFIJJ0HCt8AM0IRFnUAAAAASUVORK5CYII=" 
												style="border-radius:50px;width:100%;height:auto;background-size:cover;background-repeat:no-repeat;background-position:center;background-image:url('<?php echo JUri::base() . $contato->foto; ?>')" />
								</div>
								<?php endif; ?>
								<div class="right" style="text-align:left;margin-left:15px;">
									<?php if($contato->departamento): ?>
										<div class="departament">
											<?php echo $contato->departamento; ?>
										</div>
									<?php endif; ?>
									<?php if($contato->nome): ?>
										<strong class="name">
											<?php echo $contato->nome; ?>
										</strong>
									<?php endif; ?>
								</div>
						</a>
						<?php endforeach; ?>
				</div>
				<!-- <span style="float:right;text-shadow:0 0 10px rgba(0,0,0,0.4);display:block;clar:both;" class="fas fa-caret-down"></span> -->
		</div>
		<div class="button" onclick="jQuery('.wc-inner').toggle();" style="cursor:pointer;margin-top: 15px;background:#0DC153;color:#fff;padding:10px 15px;border-radius:50px;display: table;float: right;text-transform:uppercase;font-size:14px;box-shadow:0 0 10px rgba(0,0,0,0.4);">
				<span class="fab fa-whatsapp" style="font-size: 24px;float: left;margin-right: 5px;"></span> <strong class="wc-hmb"><?php echo $params->get('texto_botao'); ?></strong>
		</div>
</div>
<style>@media all and (max-width: 800px){.wc-hmb{display:none}}</style>
