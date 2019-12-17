{% extends 'layout.volt' %}

{% block title %}Add New Idea{% endblock %}

{% block styles %}

{% endblock %}

{% block content %}
<br><br>
<p><?php $this->flashSession->output() ?></p>
<form action="{{url('yudisium/edit/post')}}" method="POST">
    <div class="form-group">
      <label for="wisuda">wisuda</label>
      <input type="text" class="form-control" id="wisuda" name="wisuda" placeholder="wisuda" required  readonly value="{{datas['wisuda']}}">
    </div>
    <div class="form-group">
      <label for="urutan">urutan</label>
      <input type="text" class="form-control" id="urutan" name="urutan" placeholder="" required value="{{datas['urutan']}}">
    </div>
    <div class="form-group">
        <label for="tanggalawal">Tanggal Awal</label>
        <input type="text" class="form-control" id="tanggalawal" name="tanggalawal" placeholder="" required value="{{datas['tanggalawal']}}">
      </div>
      <div class="form-group">
        <label for="tanggalAkhir">Tanggal Akhir</label>
        <input type="text" class="form-control" id="tanggalakhir" name="tanggalakhir" placeholder="" required value="{{datas['tanggalakhir']}}">
      </div>
      <div class="form-group">
        <label for="status">status</label>
        <select class="form-control" id="status" name="status" placeholder="" required>
          {% if(datas['status'] ==  'Aktif') %}
            <option value="Aktif" selected>Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          {% else %}
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif" selected>Tidak Aktif</option>
          {% endif %}
        </select>
      </div>
      <a href="{{url('')}}" role="button" class="btn btn-secondary btn-sm">Back</a> &emsp;<button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </form>
{% endblock %}

{% block scripts %}

{% endblock %}