<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/olive_atlas/egdb_images";
$custom_text_path = "$root_path/olive_atlas/egdb_custom_text";
$species_path = "$root_path/olive_atlas/egdb_species";
$lab_path = "$root_path/olive_atlas/egdb_labs";
$annotation_links_path = "$root_path/olive_atlas/annotations";

// header
$dbTitle = "OliveAtlas";
$header_img = "header_img.png";
$db_logo = "egdb_logo.png";

// Toolbar
$tb_about = 1;
$tb_downloads = 1;
$tb_species = 0;
$tb_search_box = 0;
$tb_search = 0;
$tb_blast = 0;
$tb_jbrowse = 0;
$tb_seq_ext = 0;
$tb_annot_ext = 0;
$tb_gene_expr = 0;
$tb_lookup = 1;
$tb_more = 0;
$tb_custom = 1;

// About
$ab_citation = 1;
$ab_labs = 1;

//Gene examples
$gene_sample = "";
$input_gene_list="gene1.1
gene2.1
gene3.1";

$expr_input_gene_list="gene1
gene2
gene3
gene4
gene5
gene6
gene7
gene8
gene9
gene10";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;

// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA";

?>

