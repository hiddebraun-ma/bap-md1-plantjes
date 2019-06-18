<?php include 'header.php'; ?>

    <section class="content">
        <h1>Zoekresultaten</h1>
        <p>Er zijn <?php echo count( $zoekresultaten ) ?> zoekresultaten voor "<?php echo $searchterm; ?>".</p>

		<?php foreach ( $zoekresultaten as $result ): ?>
            <div class="result result-<?php echo $result['type'] ?>">
                <h2><?php echo $result['title'] ?> (<?php echo $result['type'] ?>)</h2>
                <p><?php echo $result['description'] ?></p>
				<?php
				switch ( $result['type'] ) {
					case 'movie':
						?>
                        <a href="index.php?page=movie&id=<?php echo $result['id'] ?>">Ga naar deze film</a>
						<?php
						break;
					case 'person':
						?>
                        <a href="index.php?page=person&id=<?php echo $result['id'] ?>">Ga naar deze persoon</a>
						<?php
						break;
				}
				?>
            </div>
		<?php endforeach; ?>

    </section>
<?php include 'footer.php'; ?>