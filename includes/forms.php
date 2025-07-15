    <main>
        <section>
            <a href="index.php">
                <button class="btn btn-success">Back</button>
            </a>
        </section>

        <h2 class="mt-3" >Register Vacancy</h2>

        <form method="post">

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>

                <div>

<!-- NA DIV ABAIXO FIZ A ALTERAÇÃO DE REMOVER A CLASSE "form-check" POIS A CLASSE TINHA UM PADDING-LEFT QUE DEIXAVA O INICIO DO RADIO AFASTADO 
 PARA O LADO DIREITO, DANDO A IMPRESSÃO DE ESTAR COM A FORMATAÇÃO DESALINHADA-->

                    <!-- <div class=" form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="status" value="True" checked> Open
                        </label>
                    </div> -->

                    <div class="form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="status" value="true" checked> Open
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="status" value="false"> Closed
                        </label>
                    </div>

                </div>
    
            </div>
            
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

        </form>

    </main>
