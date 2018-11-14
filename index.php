<?php get_header(); ?>

    <?php
        $page = 'home';
    ?>

    <?php include 'components/vitrine.php'; ?>

    <section class="formulario">
        <div class="container">
            <form id="_form_contato">
                <div id="_contato_callbacks"></div>
                <h2>Gestão de Seguridade</h2>
                <p>O objetivo deste formulário é atender ao disposto na Instrução nº 18/2014, da PREVIC, de 24.12.2014, que estabelece orientações e procedimentos a serem adotados pelas Entidades Fechadas de Previdência Complementar em observância ao disposto no art. 9º da Lei nº 9.613, de 03.03.1998, bem como no acompanhamento das operações realizadas por pessoas politicamente expostas, cuja definição encontra-se abaixo.</p>
                <h2>Dados do Participante</h2>
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                    </div><!-- md-7 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matrícula" required>
                    </div><!-- md-3 -->
                    <div class="col-md-2 col-sm-2">
                        <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Sexo">
                    </div><!-- md-2 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade">
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade">
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="data_nascimento" placeholder="Data de Nascimento">
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="estado_civil" placeholder="Estado Civil">
                    </div><!-- md-3 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai">
                    </div><!-- md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="nome_mae" placeholder="Nome da Mãe">
                    </div><!-- md-6 -->
                </div><!-- row -->
                <h4>Carteira de Identidade</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="numero" placeholder="Número">                       
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="data_expedicao" placeholder="Data de Expedição">                        
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="orgao" placeholder="Orgão Expedidor">                      
                    </div><!-- md-3 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="uf_identidade" placeholder="UF">                       
                    </div><!-- md-3 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="cpf" placeholder="CPF">
                    </div><!-- md-3 -->
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="nome_conjuge" placeholder="Nome do Cônjuge">
                    </div><!-- md-6 -->
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" name="ocupacao" placeholder="Ocupação Profissional">
                    </div><!-- md-3 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <input type="text" class="form-control" name="endereco_residencial" placeholder="Endereço Residencial">
                    </div><!-- md-8 -->
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                    </div><!-- md-4 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" name="complemento" placeholder="Complemento">
                    </div><!-- md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                    </div><!-- md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" name="remuneracao" placeholder="Remuneração">
                    </div><!-- md-4 -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-1 col-sm-1">
                        <input type="text" class="form-control" name="uf_endereco" placeholder="UF">
                    </div><!-- md-1 -->
                    <div class="col-md-11 col-sm-11">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <input type="text" class="form-control" name="cep" placeholder="CEP">
                            </div><!-- md-3 -->
                            <div class="col-md-3 col-sm-3">
                                <input type="text" class="form-control" name="email" placeholder="E-mail Pessoal">
                            </div><!-- md-3 -->
                            <div class="col-md-3 col-sm-3">
                                <input type="text" class="form-control" name="telefone" placeholder="(DDD) Telefone">
                            </div><!-- md-3 -->
                            <div class="col-md-3 col-sm-3">
                                <input type="text" class="form-control" name="celular" placeholder="(DDD) Celular">
                            </div><!-- md-3 -->
                        </div><!-- row -->
                    </div><!-- md-11 -->
                </div><!-- row -->
                <div class="input-group">
                    <label>Em atenção ao disposto na Lei nº 9613/98, no Decreto nº 5687/06 e na Instrução PREVIC nº 18/14, especialmente quanto à obrigatoriedade, por parte da Fasern, da identificação, do controle e acompanhamento dos negócios e movimentações financeiras das denominadas "Pessoas Politicamente Expostas", Declaro para os devidos fins e sob as penas da lei que nos últimos cinco anos e até esta data:</label>
                    <ul>
                        <li>
                            <input type="radio" id="sim" name="declaracao" class="declaracao" value="SIM, eu me enquadro na condição de Pessoa Politicamente Exposta, conforme Instrução Normativa nº 18/2014 da PREVIC."> <label for="sim" class="">SIM, eu me enquadro na condição de Pessoa Politicamente Exposta, conforme Instrução Normativa nº 18/2014 da PREVIC.</label>
                        </li>
                        <li>
                            <input type="radio" id="nao" name="declaracao" class="declaracao" value="NÃO, eu e meus familiares, parentes na linha direta, até o primeiro grau, o cônjuge, o companheiro(a) e o enteado(a) não nos enquadramos na condição de pessoa politicamente exposta, conforme Instrução Normativa nº 18/2014 da PREVIC."> <label for="nao" class="">NÃO, eu e meus familiares, parentes na linha direta, até o primeiro grau, o cônjuge, o companheiro(a) e o enteado(a) não nos enquadramos na condição de pessoa politicamente exposta, conforme Instrução Normativa nº 18/2014 da PREVIC.</label>
                        </li>
                    </ul>
                    <span><strong>Obs.:</strong> O não enquadrado na condição de pessoa politicamente exposta, a partir do momento que assumir essa condição fica obrigado a apresentar novo recadastramento de acordo com a Instrução Normativa nº 18/2014 da PREVIC.</span>
                </div><!-- input-group -->
                <div class="input-group">
                    <span>IN nº 18/2014 PREVIC:</span>
                    <span><strong>Art. 3º</strong> Para efeito do disposto no inciso III do art. 2º, consideram-se pessoas politicamente expostas brasileiras:</span>
                    <span>I - detentores de mandatos eletivos dos Poderes Executivo e Legislativo da União; II - ocupantes de cargo no Poder Executivo da União: a) de ministro de Estado ou equiparado; b) de natureza especial ou equivalente; c) de presidente, vice-presidente e diretor, ou equivalentes, de autarquias, fundações públicas, empresas públicas ou sociedades de economia mista ; e d) do Grupo Direção e Assessoramento Superior - DAS, nível 6, e equivalentes; III - os membros do Conselho Nacional de Justiça, do STF e dosTribunais Superiores; IV - os membros do Conselho Nacional do Ministério Público, o Procurador-Geral da República, o Vice-Procurador-Geral da República, o Procurador-Geral do Trabalho, o Procurador-Geral da Justiça Militar, os Subprocuradores-Gerais da República e os Procuradores-Gerais de Justiça dos Estados e do Distrito Federal; V - os membros do Tribunal de Contas da União e o Procurador-Geral do Ministério Público junto ao Tribunal de Contas da União; VI -  os governadores de Estado e do DF, presidentes de Tribunal de Justiça, de Assembléia Legislativa ou da Câmara Distrital, e presidentes de Tribunal ou Conselho de Contas de Estado, de Municípios e do Distrito Federal; e  VII - prefeitos e presidentes de Câmara Municipal das Capitais de Estado.</span>
                    <span><strong>Art. 4º</strong> No caso de pessoas politicamente expostas estrangeiras, para fins do disposto no inciso III do art. 2º, as EFPC poderão adotar as seguintes providências:</span>
                    <span>I - solicitar declaração expressa do Cliente a respeito da sua classificação; II - recorrer a informações publicamente disponíveis; III - recorrer a bases de dados eletrônicos comerciais sobre pessoas politicamente expostas; e IV - considerar a definição constante do glossário dos termos utilizados nas 40 Recomendações do Grupo de Ação Financeira sobre Lavagem de Dinheiro - GAFI, segundo a qual uma "pessoa politicamente exposta" é aquela que exerce ou exerceu importantes funções públicas em um país estrageiro, como por exemplo, chefes de Estado e de Governo, políticos de alto nível, altos servidores dos poderes públicos, magistrados ou militares de alto nível, dirigentes de empresas públicas ou dirigentes de partidos políticos.</span>
                </div><!-- input-group -->

                <h4>Caso seja do seu interesse alterar seu(s) beneficiário(s) (Art. 7º e § único do Art. 9º do Regulamento do Plano), preencha o quadro abaixo</h4>
                <!-- <input type="button" id="add_field" value="adicionar"> -->
                <div class="row" id="dep">
                    <div class="col-md-5 col-sm-5">
                        <input type="text" class="form-control" id="beneficiario_nome[]" name="beneficiario_nome[]" placeholder="Nome">
                    </div><!-- md-5 -->
                    <div class="col-md-2 col-sm-2">
                        <input type="text" class="form-control" id="beneficiario_cpf[]" name="beneficiario_cpf[]" placeholder="CPF">
                    </div><!-- md-2 -->
                    <div class="col-md-2 col-sm-2">
                        <input type="text" class="form-control" id="beneficiario_nascimento[]" name="beneficiario_nascimento[]" placeholder="Data de Nascimento">
                    </div><!-- md-2 -->
                    <div class="col-md-2 col-sm-2">
                        <input type="text" class="form-control" id="beneficiario_rateio[]" name="beneficiario_rateio[]" placeholder="% Rateio">
                    </div><!-- md-2 -->
                    <div class="col-md-1 col-sm-1">
                        <button class="btn btn-primary" type="button" id="adicionar_dependente">+</button>
                    </div><!-- md-1 -->
                </div><!-- row -->
                <div class="row" id="dep">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="local" name="local" placeholder="Local">
                    </div><!-- md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="data" name="data" placeholder="Data">
                    </div><!-- md-6 -->
                </div><!-- row -->
                <!-- <button class="btn-primary enviar">ENVIAR</button> -->
                <div class="form-button" id="button">
                    <button id="submit" class="btn-primary enviar">ENVIAR</button>
                    <div class="form-loading" id="loading">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </form>
        </div><!-- container -->
    </section><!-- formulario -->

<?php get_footer(); ?>