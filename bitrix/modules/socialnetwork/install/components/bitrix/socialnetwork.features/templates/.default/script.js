function BXSFSubmitForm(e)
{
	BX.submit(BX("sonet-features-form"));
	BX.unbind(BX("sonet_group_features_form_button_submit"), "click", BXSFSubmitForm);
	BX.PreventDefault(e);
};