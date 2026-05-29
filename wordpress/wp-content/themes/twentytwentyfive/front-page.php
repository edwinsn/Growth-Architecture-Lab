<?php get_header(); ?>
<?php 
get_template_part( 'parts/navigation/sticky-mobile-nav' ); 

?>

<main class="home-page">

  <section class="hero">
    <h1>Growth Architecture Lab</h1>
    <p>Herramienta de Escalabilidad Digital</p>
  </section>

  <!-- Sección 1: El Propósito -->
        <section class="proposal-section purpose-section">
            <h2 class="section-title">1. El Propósito</h2>
            <ul class="purpose-list">
                <li>
                    <strong>Evolución:</strong> Componentes diseñados para potenciar los ingresos y consolidar la autoridad de la marca.
                </li>
                <li>
                    <strong>Rendimiento:</strong> Optimización técnica para maximizar la velocidad, la conversión y la fiabilidad.
                </li>
                <li>
                    <strong>Estabilidad:</strong> Arquitectura robusta que garantiza una experiencia de usuario fluida y segura.
                </li>
            </ul>
        </section>

        <!-- Sección 2: Módulos de la Herramienta -->
        <section class="proposal-section modules-section">
            <h2 class="section-title">2. Módulos de la Herramienta</h2>

            <!-- Submódulo 1 -->
            <article class="module-block">
                <h3 class="module-title">1. Repositorio de Componentes (Modular Hub)</h3>
                <p class="module-description">Una biblioteca de soluciones listas para ser integradas, siguiendo una arquitectura limpia:</p>
                <ul class="module-features">
                    <li>
                        <strong>Módulos "Plug-and-Play" SOLID:</strong> Una lista de secciones y componentes fáciles de integrar.
                    </li>
                    <li>
                        <strong>Puente de Conectividad IA:</strong> Un endpoint configurado para enviar datos de la tienda a modelos de IA y recibir insights de inventario o clientes de forma automática.
                    </li>
                </ul>
            </article>

            <!-- Submódulo 2 -->
            <article class="module-block">
                <h3 class="module-title">2. Motor de Diagnóstico (Health Check)</h3>
                <ul class="module-features">
                    <li>
                        <strong>Monitor de Latencia Crítica:</strong> Una interfaz en AJAX que mide el tiempo de respuesta del servidor frente a procesos pesados (como el checkout).
                    </li>
                    <li>
                        <strong>Mapa de Fricción de Usuario:</strong> Integración de métricas ADA.
                    </li>
                </ul>
            </article>
        </section>

</main>


<?php get_footer(); ?>