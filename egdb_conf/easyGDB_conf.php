<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "olive_atlas";
$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data/olivo";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$annotation_links_path = "$root_path/$egdb_files_folder/annotations";

// header
$dbTitle = "OliveAtlas";
$header_img = "header_img3.jpg";
$db_logo = "OxA_logo.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 0;
$tb_species = 0;
$tb_search_box = 0;
$tb_tools = 0;
$tb_search = 0;
$tb_blast = 0;
$tb_jbrowse = 0;
$tb_seq_ext = 0;
$tb_annot_ext = 0;
$tb_gene_expr = 0;
$tb_lookup = 0;
$tb_more = 0;
$tb_custom = 1;

// Expression Atlas
$expr_cards = 1;
$expr_menu = 1;

// About
$ab_citation = 1;
$ab_labs = 0;

//Gene examples
$gene_sample = "";
$input_gene_list="Oleur061Scf2145g00022.1
Oleur061Scf2075g02039.1
Oleur061Scf2086g01023.1";


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

