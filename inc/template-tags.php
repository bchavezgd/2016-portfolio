<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package bchavez
 */
if ( ! function_exists( 'bchavez_portfolio_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function bchavez_portfolio_posted_on() {
	if ( get_post_type() === 'post' ) :
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'bchavez_portfolio' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
endif;
}
endif;
/* end posted on */

/* byline changes. */
function bchavez_portfolio_byline() {
	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'bchavez_portfolio' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline"> ' . $byline  . '</span>';
}
/* end byline */

if ( ! function_exists( 'bchavez_portfolio_entry_footer' ) ) {
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function bchavez_portfolio_entry_footer() {}
};
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function bchavez_portfolio_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'bchavez_portfolio_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );
		set_transient( 'bchavez_portfolio_categories', $all_the_cool_cats );
	}
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so bchavez_portfolio_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so bchavez_portfolio_categorized_blog should return false.
		return false;
	}
}
/**
 * Flush out the transients used in bchavez_portfolio_categorized_blog.
 */
function bchavez_portfolio_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'bchavez_portfolio_categories' );
}
add_action( 'edit_category', 'bchavez_portfolio_category_transient_flusher' );
add_action( 'save_post',     'bchavez_portfolio_category_transient_flusher' );

/* using to insert post thumbnail in to a background of the post header on a page */
function bchavez_post_hero() {
	if (has_post_thumbnail()) {
		printf('<header class="entry-header hero" style="background-image: url( %s );">', get_the_post_thumbnail_url());
	} else {
		echo '<header class="entry-header">';
	};
	the_title( '<h1 class="entry-title">', '</h1>' );
	echo '</header><!-- .entry-header -->';
}

/* seperating category and tags list for better styling options. */
/* translators: used between list items, there is a space after the comma */
function bchavez_portfolio_categories_list() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		$categories_list = get_the_category_list( esc_html__( ', ', 'bchavez_portfolio' ) );
		if ( $categories_list && bchavez_portfolio_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'bchavez_portfolio' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
	}
}
function bchavez_portfolio_tag_list() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'bchavez_portfolio' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . esc_html__( 'Tagged %1$s', 'bchavez_portfolio' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
	}
}

function bchavez_portfolio_comments_link() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'bchavez_portfolio' ), esc_html__( '1 Comment', 'bchavez_portfolio' ), esc_html__( '% Comments', 'bchavez_portfolio' ) );
		echo '</span>';
	}
}

function bchavez_portfolio_edit_link() {
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'bchavez_portfolio' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}



	function bchavez_entry_thumbnail_loop($permalink) {
		if( !is_sticky() && has_post_thumbnail() ) {
			echo '<figure class="entry-thumbnail-loop"><a href="' . $permalink . '">';
			the_post_thumbnail('loop');
			echo '</a></figure>';
		};
	}
