<?php 
	class xacnhan_controller
	{
		var $template= '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FS</title>
        
    <style type="text/css">
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage,.mcnRetinaImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}

		body,#bodyTable{
			background-color:#FFFFFF;
		}
	
		#bodyCell{
			border-top:0;
		}
		h1{
			color:#FFFFFF;
			font-family:Georgia;
			font-size:60px;
			font-style:normal;
			font-weight:normal;
			line-height:200%;
			letter-spacing:normal;
			text-align:center;
		}
		h2{
			color:#FFFFFF;
			font-family:Helvetica;
			font-size:30px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			text-align:center;
		}
		h3{
			color:#393939;
			font-family:Helvetica;
			font-size:20px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			text-align:left;
		}
		h4{
			color:#999999;
			font-family:Helvetica;
			font-size:18px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			text-align:left;
		}
		#templatePreheader{
			background-color:#FFFFFF;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:9px;
			padding-bottom:9px;
		}
		#templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
			color:#656565;
			font-family:Helvetica;
			font-size:12px;
			line-height:150%;
			text-align:left;
		}

		#templatePreheader .mcnTextContent a,#templatePreheader .mcnTextContent p a{
			color:#656565;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateHeader{
			background-color:#E6A56A;
			background-image:url(https://cdn-images.mailchimp.com/template_images/gallery/furniture6.jpeg);
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:80px;
			padding-bottom:80px;
		}

		#templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
			color:#FFFFFF;
			font-family:Helvetica;
			font-size:20px;
			line-height:150%;
			text-align:center;
		}

		#templateHeader .mcnTextContent a,#templateHeader .mcnTextContent p a{
			color:#FFFFFF;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateBody{
			background-color:#FFFFFF;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:80px;
			padding-bottom:0;
		}

		#templateBody .mcnTextContent,#templateBody .mcnTextContent p{
			color:#202020;
			font-family:Helvetica;
			font-size:18px;
			line-height:150%;
			text-align:center;
		}

		#templateBody .mcnTextContent a,#templateBody .mcnTextContent p a{
			color:#ED5A2E;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateUpperColumns{
			background-color:#FFFFFF;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:0;
			padding-bottom:80px;
		}

		#templateUpperColumns .columnContainer .mcnTextContent,#templateUpperColumns .columnContainer .mcnTextContent p{
			color:#202020;
			font-family:Helvetica;
			font-size:16px;
			line-height:150%;
			text-align:left;
		}

		#templateUpperColumns .columnContainer .mcnTextContent a,#templateUpperColumns .columnContainer .mcnTextContent p a{
			color:#ED5A2E;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateLowerColumns{
			background-color:#EEEEEE;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:2px solid #EAEAEA;
			padding-top:80px;
			padding-bottom:80px;
		}

		#templateLowerColumns .columnContainer .mcnTextContent,#templateLowerColumns .columnContainer .mcnTextContent p{
			color:#202020;
			font-family:Helvetica;
			font-size:16px;
			line-height:150%;
			text-align:left;
		}

		#templateLowerColumns .columnContainer .mcnTextContent a,#templateLowerColumns .columnContainer .mcnTextContent p a{
			color:#666666;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateFooter{
			background-color:#FFFFFF;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:80px;
			padding-bottom:80px;
		}

		#templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
			color:#656565;
			font-family:Helvetica;
			font-size:12px;
			line-height:150%;
			text-align:left;
		}

		#templateFooter .mcnTextContent a,#templateFooter .mcnTextContent p a{
			color:#656565;
			font-weight:normal;
			text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		#bodyCell{
			padding-top:10px !important;
		}

}	@media only screen and (max-width: 480px){
		.columnWrapper{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){

		h1{
			font-size:22px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h2{
			font-size:20px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h3{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h4{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			font-size:14px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templatePreheader{
			display:block !important;
		}

}	@media only screen and (max-width: 480px){

		#templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
			font-size:14px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templateBody .mcnTextContent,#templateBody .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templateUpperColumns .columnContainer .mcnTextContent,#templateUpperColumns .columnContainer .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templateLowerColumns .columnContainer .mcnTextContent,#templateLowerColumns .columnContainer .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		#templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
			font-size:14px !important;
			line-height:150% !important;
		}

}</style></head>
    <body>
       <span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span>
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
               
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
								<td align="center" valign="top" id="templatePreheader">
									
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="preheaderContainer"></td>
										</tr>
									</table>
									
								</td>
                            </tr>
							<tr>
								<td align="center" valign="top" id="templateHeader">
									
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
              
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px; font-size: 9px;">
                        
                            <h1><span style="font-size:52px">Welcome to Feliz Shop</span></h1>

<p style="font-size: 9px;"><span style="font-size:18px">Chúc mừng bạn đã đăng ký thành công.<br>
<br>
Vui lòng nhấn vào nút bên dưới để kích hoạt tài khoản.</span></p>

                        </td>
                    </tr>
                </tbody></table>
				
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
    <tbody class="mcnDividerBlockOuter">
        <tr>
            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 20px 18px 0px;">
                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;">
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 100px;background-color: #ED5A2E;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Lora, Georgia, &quot;Times New Roman&quot;, serif; font-size: 16px; padding: 19px;">
                                <a class="mcnButton " title="Kích hoạt" href="http://felizshop.us:81/admin?controller=hethong&amp;action=active&amp;co=1" target="_blank" style="font-weight: bold;letter-spacing: 0px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Kích hoạt</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table></td>
										</tr>
									</table>
									
								</td>
                            </tr>
							<tr>
								<td align="center" valign="top" id="templateBody">
									
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="bodyContainer"></td>
										</tr>
									</table>
									
								</td>
                            </tr>
							<tr>
								<td align="center" valign="top" id="templateUpperColumns">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top">
												
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="200" class="columnWrapper">
													<tr>
														<td valign="top" class="columnContainer"></td>
													</tr>
												</table>
												
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="200" class="columnWrapper">
													<tr>
														<td valign="top" class="columnContainer"></td>
													</tr>
												</table>
												
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="200" class="columnWrapper">
													<tr>
														<td valign="top" class="columnContainer"></td>
													</tr>
												</table>
												
											</td>
										</tr>
									</table>
								</td>
                            </tr>
							<tr>
								<td align="center" valign="top" id="templateLowerColumns">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top">
												
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="300" class="columnWrapper">
													<tr>
														<td valign="top" class="columnContainer"></td>
													</tr>
												</table>
												
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="300" class="columnWrapper">
													<tr>
														<td valign="top" class="columnContainer"></td>
													</tr>
												</table>
												
											</td>
										</tr>
									</table>
								</td>
                            </tr>
                            <tr>
								<td align="center" valign="top" id="templateFooter">
									
									<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
										<tr>
                                			<td valign="top" class="footerContainer"></td>
										</tr>
									</table>
									
								</td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
';
	}
 ?>