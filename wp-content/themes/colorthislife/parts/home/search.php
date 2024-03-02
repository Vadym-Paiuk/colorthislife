<?php
$search = $args;

if ( empty( $search ) ) {
	return;
}
?>

<section class="search">
	<div class="container search-content">
		<form action=""
		      class="search-form">
			<div class="search-select">
				<span class="toggle-dropdown search-select-title">
					<?php _e( 'בחר קהל יעד', THEME_TEXT_DOMAIN ); ?>
				</span>
				<div class="dropdown search-select-dropdown">
					<span class="search-select-dropdown-title">
					<?php _e( 'בחר קהל יעד', THEME_TEXT_DOMAIN ); ?>
					</span>
					<div class="search-select-dropdown-variations">
						<label for="">
							<input type="checkbox"
							       name="cat"
							       value="1">
							יסודי
						</label>
						<label for="">
							<input type="checkbox"
							       name="cat"
							       value="2">
							חט״ב וחט״ע
						</label>
					</div>
				</div>
			</div>
			<input type="text"
			       class="search-input"
			       placeholder="<?php echo $search['placeholder']; ?>">
			<button type="submit">
				<svg width="28"
				     height="29"
				     viewBox="0 0 28 29"
				     fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
					      clip-rule="evenodd"
					      d="M22.9903 21.9326L17.8796 16.8198C18.7957 15.5704 19.2865 14.0598 19.2796 12.5105C19.2621 8.46624 15.9911 5.19042 11.9469 5.16707C10.0115 5.15831 8.153 5.92395 6.78541 7.29342C5.41782 8.66289 4.65473 10.5224 4.66614 12.4578C4.68362 16.5024 7.95497 19.7785 11.9995 19.8019C13.5552 19.8086 15.0713 19.3121 16.3216 18.3865L16.3269 18.3825L21.433 23.4912C21.709 23.7809 22.1204 23.8981 22.5077 23.7975C22.8949 23.6969 23.1973 23.3943 23.2975 23.007C23.3978 22.6196 23.2802 22.2084 22.9903 21.9326ZM11.9934 18.3374C8.75796 18.3188 6.14092 15.6982 6.12672 12.4627C6.11799 10.9146 6.72851 9.42723 7.82238 8.33173C8.91624 7.23623 10.4027 6.6235 11.9508 6.62993C15.1863 6.64855 17.8033 9.26915 17.8175 12.5047C17.8262 14.0527 17.2157 15.5401 16.1218 16.6356C15.028 17.7311 13.5415 18.3438 11.9934 18.3374Z"
					      fill="#D1E1F6"/>
				</svg>
			</button>
		</form>
	</div>
</section>
