<x-app-layout>
    <style>
        .conection {
            display: none;
        }
        @media (min-width: 768px) {
            .conection {
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                z-index: -9;
                height: 90% !important;
            }
        }
        
    </style>
    <canvas class="conection"></canvas>
    <div class="container m-auto w-11/12 rounded-b-2xl bg-white">
    <style>
        .tagAboutUs{
            width: 200px;
            height: 60px;
            margin-left: 50px;
            color: #003485;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            border-radius: 0px 0px 5px 5px;
            margin-bottom: 30px;
            box-shadow: 0px 11px 25px -15px rgba(30, 30, 60, 0.22);
            border: 1px solid #f7f7f7;
        }
        .objetivos p span{
            color: #79C1B9;
            font-weight: 900;
        }

        .lista-de-objetivos ul li{
            margin-bottom: 0.5rem;
        }
    </Style>

        <div class="tagAboutUs">
            Nuestra Misión
        </div>
        <div class="px-2 pb-2 md:px-6 md:pb-6">
            <h3 class="text-center md:text-left"><strong>VISIÓN</strong></h3>
            <p class="mb-2">
                Ser reconocida como la ONG DE LA REGIÓN LATAM referente por el conocimiento y defensa de la Empresa Familiar y sus Consultores. Ser un agente promotor y facilitador de Políticas Públicas para la Empresa Familiar Latinoamérica.
            </p>

            <h3 class="text-center md:text-left"><strong>MISIÓN</strong></h3>
            <p>
                Contribuir al desarrollo de una cultura y conocimiento de la Empresa Familiar
                fomentando la institucionalidad y sinergias en los países de América Latina.
                Ser la ONG que articule y coordine entre sus asociados los servicios y productos de
                difusión, formación e investigación con el fin de contribuir al desarrollo de las
                Empresas Familiares y de los profesionales a su servicio en la región.
            </p>
            <div class="my-4 col-12 col-md-10 p-0 mr-auto ml-auto">
                <img class="col-12 p-0" src="{{ asset("img/ILAEF_grupal.jpg") }}" alt="foto del grupo de autoridades del  Instituto Latinoamericano de la Empresa Familiar">
            </div>
            <div class="objetivos md:flex ">
                <div class="w-full md:w-3/12 md:pr-2 mb-2 md:mb-0">
                    <h2 class="font-black text-center md:text-right">Los objetivos de la institución son los siguientes:</h2>
                </div>
                <div class="lista-de-objetivos w-full md:9/12">
                    <ul>
                        <li><p>
                            <span class="" >Difundir la importancia de las empresas familiares en los diversos países
                            latinoamericanos</span> y desarrollar actividades tendientes a concientizar a los sectores públicos y privados de cada uno en la necesidad de políticas de apoyo, fortalecimiento y continuidad.
                            </p>
                        </li>
                        <li>
                            <p>
                            <span>Apoyar las actividades de instituciones públicas y privadas,</span> personas físicas y jurídicas,
                            universidades y empresas, locales e internacionales, que realizan tareas de
                            investigación, docencia, consultoría, capacitación y fortalecimiento de las empresas
                            familiares en Latinoamérica y realizar actividades conjuntas con las mismas mediante
                            convenios de cooperación.
                            </p>
                        </li>
                        <li>
                            <p>
                            <span>Promover la creación de institutos de la empresa familiar en todos los países de
                            Latinoamérica,</span> con objetivos similares a los de los socios institucionales del ILAEF,
                            realizando actividades previas de concientización y preparación y, una vez creados,
                            brindándoles la capacitación y el apoyo que pudieran necesitar para el comienzo y
                            mantenimiento de sus actividades. A los fines de realizar actividades locales y
                            promover la creación de institutos de empresa familiar en cada país, podrá crear
                            capítulos en los diversos países, integradas por personalidades locales y consejeros
                            delegados del ILAEF y/o suscribir convenios con entidades locales calificadas para la
                            tarea.
                            </p>
                        </li>
                        <li>
                            <p>
                            <span>Crear una red latinoamericana de Institutos de Empresa Familiar</span> a efectos de estrechar
                            vínculos entre ellos, establecer políticas regionales y acciones comunes, promover el
                            apoyo mutuo, la complementación, el intercambio de profesores, la capacitación
                            conjunta de consultores y la realización de encuentros, congresos y jornadas
                            latinoamericanas destinadas a investigadores, profesores, consultores, profesionales y
                            familias empresarias.
                            </p>
                        </li>
                        <li>
                            <p>
                            <span>Crear un centro de investigaciones sobre empresas familiares latinas que permita</span>
                            establecer contactos entre todos los investigadores, intercambiar experiencias y
                            apoyos, recibir estudios, estadísticas, trabajos y evaluaciones y publicar sus resultados
                            en la web.
                            </p>
                        </li>
                        <li>
                            <p>
                            <span>Convocar y organizar cada tres años un Congreso Latinoamericano de Empresas
                            Familiares,</span> reuniendo a los institutos, investigadores, profesores, consultores,
                            profesionales y familias empresarias de la región a efectos de intercambiar
                            experiencias, ideas y proyectos.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>