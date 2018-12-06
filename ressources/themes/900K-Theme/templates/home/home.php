<!-- <div class="WIP">
  <img src="<?//= IMAGES_URL; ?>/logo_blanc" alt="Logo_aavi">
</div> -->
<a href="#" class=" mdc-ripple-surface mdc-ripple-surface--primary mdc-ripple-upgraded"> test </a>
<div class=" mdc-ripple-surface mdc-ripple-surface--primary mdc-ripple-upgraded">


</div>
<div class="mdc-text-field">
  <input type="text" id="my-text-field" class="mdc-text-field__input">
  <label class="mdc-floating-label" for="my-text-field">Hint text</label>
  <div class="mdc-line-ripple"></div>
</div>

<script>
var surface = document.querySelector('.mdc-ripple-surface ');

mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));
</script>
