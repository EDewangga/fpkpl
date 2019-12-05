{% extends 'layout.volt' %}

{% block title %}Add New Idea{% endblock %}

{% block styles %}

{% endblock %}

{% block content %}
<br><br>
<form action="{{url('yudisium/add/new')}}" method="POST">
    <div class="form-group">
      <label for="wisuda">wisuda</label>
      <input type="text" class="form-control" id="wisuda" name="wisuda" placeholder="wisuda" required>
    </div>
    <div class="form-group">
      <label for="urutan">urutan</label>
      <input type="text" class="form-control" id="urutan" name="urutan" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="tanggalAwal">Tanggal Awal</label>
        <input type="text" class="form-control" id="tanggalAwal" name="tanggalAwal" placeholder="" required>
      </div>
      <div class="form-group">
        <label for="tanggalAkhir">Tanggal Akhir</label>
        <input type="text" class="form-control" id="tanggalAkhir" name="tanggalAkhir" placeholder="" required>
      </div>
      <div class="form-group">
        <label for="status">status</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="" required>
      </div>
      <a href="{{url('')}}" role="button" class="btn btn-secondary btn-sm">Back</a>&emsp;<button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </form>
{% endblock %}

{% block scripts %}

{% endblock %}