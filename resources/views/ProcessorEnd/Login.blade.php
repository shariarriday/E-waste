@include('header')
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <form action = "" method="POST"> <! EDIT HERE AND ADD THE ACTION FOR YOUR FORM>
    <h1>Form Example</h1>
    <div class="form-group">
      <select>
        <option>Value 1</option>
        <option>Value 2</option>
      </select>
      <label for="select" class="control-label">Selectbox</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <input type="text" required="required"/>
      <label for="input" class="control-label">Textfield</label><i class="bar"></i>
    </div>
    <div class="form-group">
      <textarea required="required"></textarea>
      <label for="textarea" class="control-label">Textarea</label><i class="bar"></i>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" checked="checked"/><i class="helper"></i>I'm the label from a checkbox
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"/><i class="helper"></i>I'm the label from a checkbox
      </label>
    </div>
    <div class="form-radio">
      <div class="radio">
        <label>
          <input type="radio" name="radio" checked="checked"/><i class="helper"></i>I'm the label from a radio button
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="radio"/><i class="helper"></i>I'm the label from a radio button
        </label>
      </div>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"/><i class="helper"></i>I'm the label from a checkbox
      </label>
    </div>
  </form>
  <div class="button-container">
    <button type="button" class="button"><span>Submit</span></button>
  </div>
</div>
</html>
