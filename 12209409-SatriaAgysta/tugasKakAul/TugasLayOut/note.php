<div class="teks-panjang">
  <input type="checkbox" class="toggle" id="expand">
  <label for="expand" class="label">Selengkapnya</label>
  <p class="teks-awal">Ini adalah teks yang panjang dan banyak.</p>
  <p class="teks-tambahan">Ini adalah teks yang akan ditampilkan ketika Anda mengklik "Selengkapnya".</p>
</div>

<style>
    .teks-panjang .teks-tambahan {
  display: none;
}

.teks-panjang .toggle:checked ~ .teks-tambahan {
  display: block;
}

.label {
  cursor: pointer;
  color: blue;
  text-decoration: underline;
}

</style>