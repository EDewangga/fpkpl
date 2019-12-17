{% extends 'layout.volt' %}

{% block title %}Home{% endblock %}

{% block styles %}


{% endblock %}

{% block content %}
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">wisuda</th>
        <th scope="col">urutan</th>
        <th scope="col">tanggal awal</th>
        <th scope="col">tanggal akhir</th>
        <th scope="col">status</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
      {% for wisuda in datas.getResponse() %} 
      <tr>
          <th scope="row"><a href="/yudisium/mahasiswa/{{wisuda['wisuda']}}"> {{ wisuda['wisuda'] }}</th>
          <td>{{ wisuda['urutan'] }}</td>
          <td>{{ wisuda['tanggalawal'] }}</td>
          <td>{{ wisuda['tanggalakhir'] }}</td>
          <td>{{ wisuda['status'] }}</td>
          <td ><a href="/yudisium/edit/{{wisuda['wisuda']}}" role="button" class="btn btn-success">edit</a></td>
        </tr> 
      {% endfor %}
    </tbody>
  </table>
<div class="container-fluid">
  <div class="col"><a href="{{url('yudisium/add/')}}" role="button" class="btn btn-primary btn-lg">Tambah Data yudisium</a>&emsp;</div>
  <div class="col mt-5"> <a href="{{url('/yudisium/tidak-aktif')}}" role="button" class="btn btn-dark btn-lg">Wisuda Tidak Aktif</a>&emsp; <a href="{{url('/yudisium/aktif')}}" role="button" class="btn btn-dark btn-lg">Wisuda Aktif</a>&emsp;</div>  
</div>

{% endblock %}

{% block scripts %}
<!-- idea_title -->
{% endblock %}