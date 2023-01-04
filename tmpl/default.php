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
		<div class="wc-inner" style="border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.4);">
				<div class="header" style="text-align:left;position:relative;background:#0DC153;color:#fff;padding:15px 30px 15px 15px;border-top-left-radius:10px;border-top-right-radius:10px;">
						<?php echo $params->get('texto_cabecalho'); ?>
						<span onclick="document.querySelector('.wc-inner').classList.remove('wc-open');" style="cursor:pointer;position:absolute;top:15px;right:15px;"><svg xmlns="http://www.w3.org/2000/svg" style="width:16px" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#fff" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg></span>
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
		</div>
		<div class="button" onclick="document.querySelector('.wc-inner').classList.toggle('wc-open')" style="cursor:pointer;margin-top: 15px;background:#0DC153;color:#fff;padding:10px 15px;border-radius:50px;display: table;float: right;text-transform:uppercase;font-size:14px;box-shadow:0 0 10px rgba(0,0,0,0.4);">
				<span style="font-size: 24px;float: left;margin-right: 5px;display: flex;align-items: center;">
				<svg xmlns="http://www.w3.org/2000/svg" style="width:20px;margin-right:5px;" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#fff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
			</span> <strong class="wc-hmb"><?php echo $params->get('texto_botao'); ?></strong>
		</div>
</div>
<style>
.wc-inner:not(.wc-open){display:none}
@media all and (max-width: 800px){.wc-hmb{display:none}}
</style>
