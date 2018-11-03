<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Gerenciamento de Projetos</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @include('layout.estilos')
    </head>

    <body>
      <div class="container-fluid"> 
        <div class="row">
          <!-- Menu Superior -->
          @include('layout.menus')
        </div>
      </div>

      <div>
          <div class="container">
              <form action="{{route('projects.store')}}" method="post">

                {!! csrf_field() !!}

              <!--'project_name','line_action','objective','summary','start_date','end_date' -->

                  <div class="form-group row">
                    <div class="form-group">
                      <label for="project_name">Nome do Projeto</label>
                      <input type="text" required="" class="form-control" name="project_name" id="project_name" aria-describedby="helpId" placeholder="Nome do Projeto..">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="line_action">Area de Atuação</label>
                        <input type="text" required=""  class="form-control" name="line_action" id="line_action" aria-describedby="helpId" placeholder="Area de Atuação...">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="objective">Objetivo</label>
                        <input type="text" required=""  class="form-control" name="objective" id="objective" aria-describedby="helpId" placeholder="Objetivo...">
                    <div>
                    <br>
                    <div class="form-group">
                          <label for="summary">Resumo:</label>
                          <textarea required=""  class="form-control" name="summary" id="summary" rows="3"></textarea>
                    </div>

                    </div>
                  </div>
                  
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      @include('layout.scripts')
    </body>
    
  </html>