{% extends 'layout.volt' %}

{% block title %}Add New Idea{% endblock %}

{% block styles %}

{% endblock %}

{% block content %}
<br><br>
<p><?php $this->flashSession->output() ?></p>
<form action="{{url('mahasiswa/add/post')}}" method="POST">
    <div class="form-group">
      <label for="nrp">nrp</label>
      <input type="text" class="form-control" id="nrp" name="nrp" placeholder="" required>
    </div>
    <div class="form-group">
      <label for="nama">nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="ipk">ipk</label>
        <input type="text" class="form-control" id="ipk" name="ipk" placeholder="" required>
      </div>
      <div class="form-group">
        <label for="wisuda">wisuda</label>
        <input type="text" class="form-control" id="wisuda" name="wisuda" placeholder="" required>
      </div>
      <a href="{{url('')}}" role="button" class="btn btn-secondary btn-sm">Back</a>&emsp;<button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </form>
{% endblock %}

{% block scripts %}

{% endblock %}