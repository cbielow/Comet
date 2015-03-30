<?php include "head.php" ; ?>
<html>
<body>
<?php include "topmenu.php" ; ?>
<?php include "imgbar.php" ; ?>

<div id="page">
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: activation_method</h2>

         <ul>
         <li>This parameter specifies which scan types are searched.
         <li>If "ALL" is specified, no filtering based on the activation method
         is applied.
         <li>If any other allowed entry is chosen, only spectra with activation
         method matching the specified entry are searched.
         <li>This parameter is valid only for mzXML, mzML and mz5 input.
         <li>Allowed values are: ALL, CID, ECD, ETD, PQD, HCD, IRMPD
         <li>The default value is "ALL" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>activation_method = ALL</tt>
         <br><tt>activation_method = CID</tt>
         <br><tt>activation_method = ETD</tt>
         <br><tt>activation_method = HCD</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_A_alanine</h2>

         <ul>
         <li>Specify a static modification to the residue A.
         <li>The specified mass is added to the unmodified mass of A.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_A_alanine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_B_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'B' in the input FASTA file and specify its mass here.
         <li>The letter 'B' has no default mass.  So the mass entered here will
             be its residue mass.
         <li>The default value is "0.0" if this parameter is missing.  If any peptide
             contains the letter 'B' while this parameter value is set to 0.0, that
             peptide will not be analyzed.
         </ul>

         <p>Example:
         <br><tt>add_B_user_amino_acid = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_C_cysteine</h2>

         <ul>
         <li>Specify a static modification to the residue C.
         <li>The specified mass is added to the unmodified mass of C.
         <li>The default value is "0.0" if this parameter is missing.
         If Comet was compiled for
         <a href="noble.gs.washington.edu/proj/crux/">Crux</a> compatibility,
         the default value is "57.021464".
         Note that in the example parameter file produced by Comet using the "-p"
         command line option, this parameter entry has a value of 57.021464 for
         cysteine carbamidomethylation.
         </ul>

         <p>Example:
         <br><tt>add_C_cysteine = 57.021464</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Cterm_peptide</h2>

         <ul>
         <li>Specify a static modification to the C-terminus of all peptides.
         <li>The specified mass is added to the unmodified C-terminal mass (mass of OH or 17.00274).
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Cterm_peptide = 14.01</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Cterm_protein</h2>

         <ul>
         <li>Specify a static modification to the C-terminal peptide of each protein entry.
         <li>The specified mass is added to the unmodified C-terminal mass (mass of OH or 17.00274).
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Cterm_protein = 14.01</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_D_aspartic_acid</h2>

         <ul>
         <li>Specify a static modification to the residue D.
         <li>The specified mass is added to the unmodified mass of D.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_D_cysteine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_E_glutamic_acid</h2>

         <ul>
         <li>Specify a static modification to the residue E.
         <li>The specified mass is added to the unmodified mass of E.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_E_cysteine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_F_phenylalanine</h2>

         <ul>
         <li>Specify a static modification to the residue F.
         <li>The specified mass is added to the unmodified mass of F.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_F_phenylalanine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_G_glycine</h2>

         <ul>
         <li>Specify a static modification to the residue G.
         <li>The specified mass is added to the unmodified mass of G.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_G_cysteine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_H_histidine</h2>

         <ul>
         <li>Specify a static modification to the residue H.
         <li>The specified mass is added to the unmodified mass of H.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_H_histidine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_I_isoleucine</h2>

         <ul>
         <li>Specify a static modification to the residue I.
         <li>The specified mass is added to the unmodified mass of I.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_I_isoleucine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_J_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'J' in the input FASTA file and specify its mass here.
         <li>The letter 'J' has no default mass.  So the mass entered here will
             be its residue mass.
         <li>The default value is "0.0" if this parameter is missing.  If any peptide
             contains the letter 'J' while this parameter value is set to 0.0, that
             peptide will not be analyzed.
         </ul>

         <p>Example:
         <br><tt>add_J_user_amino_acid = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_K_lysine</h2>

         <ul>
         <li>Specify a static modification to the residue K.
         <li>The specified mass is added to the unmodified mass of K.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_K_lysine = 14.01</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_L_leucine</h2>

         <ul>
         <li>Specify a static modification to the residue L.
         <li>The specified mass is added to the unmodified mass of L.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_L_leucine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_M_methionine</h2>

         <ul>
         <li>Specify a static modification to the residue M.
         <li>The specified mass is added to the unmodified mass of M.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_M_methionine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_N_asparagine</h2>

         <ul>
         <li>Specify a static modification to the residue N.
         <li>The specified mass is added to the unmodified mass of N.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_N_cysteine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Nterm_peptide</h2>

         <ul>
         <li>Specify a static modification to the N-terminus of all peptides.
         <li>The specified mass is added to the unmodified N-terminal mass (mass of H or 1.007825).
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Nterm_peptide = 14.01</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Nterm_protein</h2>

         <ul>
         <li>Specify a static modification to the N-terminal peptide of each protein entry.
         <li>The specified mass is added to the unmodified N-terminal mass (mass of H or 1.007825).
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Nterm_protein = 14.01</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_O_ornithine</h2>

         <ul>
         <li>Specify a static modification to the residue O.
         <li>The specified mass is added to the unmodified mass of O.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_O_ornithine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_P_proline</h2>

         <ul>
         <li>Specify a static modification to the residue P.
         <li>The specified mass is added to the unmodified mass of P.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_P_proline = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Q_glutamine</h2>

         <ul>
         <li>Specify a static modification to the residue Q.
         <li>The specified mass is added to the unmodified mass of Q.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Q_glutamine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_R_arginine</h2>

         <ul>
         <li>Specify a static modification to the residue R.
         <li>The specified mass is added to the unmodified mass of R.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_R_arginine = 28.03</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_S_serine</h2>

         <ul>
         <li>Specify a static modification to the residue S.
         <li>The specified mass is added to the unmodified mass of s.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_S_serine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_T_threonine</h2>

         <ul>
         <li>Specify a static modification to the residue T.
         <li>The specified mass is added to the unmodified mass of T.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_T_threonine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_U_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'U' in the input FASTA file and specify its mass here.
         <li>The letter 'U' has no default mass.  So the mass entered here will
             be its residue mass.
         <li>The default value is "0.0" if this parameter is missing.  If any peptide
             contains the letter 'U' while this parameter value is set to 0.0, that
             peptide will not be analyzed.
         </ul>

         <p>Example:
         <br><tt>add_U_user_amino_acid = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_V_valine</h2>

         <ul>
         <li>Specify a static modification to the residue V.
         <li>The specified mass is added to the unmodified mass of V.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_V_valine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_W_tryptophan</h2>

         <ul>
         <li>Specify a static modification to the residue W.
         <li>The specified mass is added to the unmodified mass of W.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_W_tryptophan = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_X_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'X' in the input FASTA file and specify its mass here.
         <li>The letter 'X' has no default mass.  So the mass entered here will
             be its residue mass.
         <li>The default value is "0.0" if this parameter is missing.  If any peptide
             contains the letter 'X' while this parameter value is set to 0.0, that
             peptide will not be analyzed.
         </ul>

         <p>Example:
         <br><tt>add_X_user_amino_acid = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Y_tyrosine</h2>

         <ul>
         <li>Specify a static modification to the residue Y.
         <li>The specified mass is added to the unmodified mass of Y.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>add_Y_tyrosine = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: add_Z_user_amino_acid</h2>

         <ul>
         <li>This parameter allows users to define their own custom residue. Just
             encode the letter 'Z' in the input FASTA file and specify its mass here.
         <li>The letter 'Z' has no default mass.  So the mass entered here will
             be its residue mass.
         <li>The default value is "0.0" if this parameter is missing.  If any peptide
             contains the letter 'Z' while this parameter value is set to 0.0, that
             peptide will not be analyzed.
         </ul>

         <p>Example:
         <br><tt>add_Z_user_amino_acid = 15.9949</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: allowed_missed_cleavage</h2>

         <ul>
         <li>Number of allowed missed enzyme cleavages in a peptide.
         <li>Parameter is not applied of the no-enzyme option is specified
         in the <a href="search_enzyme_number.php">search_enzyme_number</a>
         parameter.
         <li>The default value is "2" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>allowed_missed_cleavage = 0</tt> &nbsp; &nbsp; <i>for no missed cleavages</i>
         <br><tt>allowed_missed_cleavage = 2</tt> &nbsp; &nbsp; <i>allow two missed cleavages</i>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: clear_mz_range</h2>

         <ul>
         <li>This parameter is intended for iTRAQ/TMT type data where one might
         want to remove the reporter ion signals in the MS/MS spectra prior to searching.
         <li>Defines the m/z range to clear out in each MS/MS spectra
         <li>This parameter has two decimal values.
         <li>The first value is the lower mass cutoff and the second value is
         the high mass cutoff.
         <li>Valid values are two decimal numbers where the first number must
         be less or equal to the second number.
         <li>All peaks between the two decimal values are cleared out.
         <li>The default value is "0.0 0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>clear_mz_range = 0.0 0.0</tt> &nbsp; &nbsp; <i>parameter is ignored</i>
         <br><tt>clear_mz_range = 112.5 121.5</tt> &nbsp; &nbsp; <i>ignore all peaks between 112.5 and 121.5 m/z for iTRAQ 8-plex</i>
         <br><tt>clear_mz_range = 125.5 131.5</tt> &nbsp; &nbsp; <i>ignore all peaks between 125.5 and 131.5 m/z for TMT</i>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: clip_nterm_methionine</h2>

         <ul>
         <li>This parameter controls whether Comet will automatically remove
         the N-terminal methionine from a sequence entry.
         <li>If set to 0, the sequence is analyzed as-is.
         <li>If set to 1, any sequence with an N-terminal methionine will be
         analyzed as-is as well as with the methionine removed.  This means
         that any N-terminal modifications will also apply (if appropriate)
         to the peptide that is generated after the removal of the methionine.
         <li>Valid values are 0 and 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>clip_nterm_methionine = 0</tt>
         <br><tt>clip_nterm_methionine = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: database_name</h2>

         <ul>
         <li>A full or relative path to the sequence database, in FASTA format, to search. Example databases
         include RefSeq or UniProt.
         <li>Database can contain amino acid sequences or nucleic acid sequences.  If sequences are amino acid
         sequences, set the parameter "nucleotide_reading_frame = 0".  If the sequences are nucleic acid
         sequences, you must instruct Comet to translate these to amino acid sequences.  Do this by setting
         "nucleotide_reading_frame" to a value between 1 and 9.
         <li>There is no default value if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>database_name = /usr/local/db/yeast.fasta</tt>
         <br><tt>database_name = c:\local\db\yeast.fasta</tt>
         <br><tt>database_name = yeast.fasta</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: decoy_prefix</h2>

         <ul>
         <li>This parameter specifies the prefix string that is pre-pended to
         the protein identifier and reported for decoy hits.
         <li>This parameter is only valid when a <a href="decoy_search.php">decoy_search</a>
         is performed.
         <li>For example, if the prefix parameter is set to "decoy_prefix = reverse_",
         a match to a decoy peptide from protein "ALBU_HUMAN" would return
         "reverse_ALBU_HUMAN" as the protein identifier.
         <li>The default value is "DECOY_" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>decoy_prefix = DECOY_</tt>
         <br><tt>decoy_prefix = rev_</tt>
         <br><tt>decoy_prefix = --any_string_you_want_without_spaces--</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: decoy_search</h2>

         <ul>
         <li>This parameter controls whether or not an internal decoy search is performed.
         <li>Comet generates decoys by reversing each target peptide sequence, keeping the
             N-terminal or C-terminal amino acid in place (depending on the "sense" value of the
             digestion enzyme specified by <a href="search_enzyme_number.php">search_enzyme_number</a>).
             For example, peptide DIGSESTK becomes decoy peptide TSESGIDK for a tryptic search
             and peptide DVINHKGGA becomes DAGGKHNIV for an Asp-N search.
         <li>Valid parameter values are 0, 1, or 2:
            <ul>
            <li>0 = no decoy search (default)
            <li>1 = concatenated decoy search.  Target and decoy entries will be scored against
            each other and a single result is performed for each spectrum query.
            <li>2 = separate decoy search.  Target and decoy entries will be scored separately
            and separate target and decoy search results will be reported.
            </ul>
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>decoy_search = 0</tt>
         <br><tt>decoy_search = 1</tt>
         <br><tt>decoy_search = 2</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: digest_mass_range</h2>

         <ul>
         <li>Defines the mass range of peptides to search (based on MH+ or the singly
         protonated mass).
         <li>This parameter has two decimal values.
         <li>The first value is the lower mass cutoff and the second value is
         the high mass cutoff.
         <li>Only spectra with experimental MH+ masses in within the defined
         mass ranges are searched.
         <li>Valid values are two decimal numbers where the first number must
         be less or equal to the second number.
         <li>The default value is "0.0 10000.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>digest_mass_range = 600.0 5000.0</tt> &nbsp; &nbsp; <i>search only 600.0 to 5000.0 mass range</i>
         <br><tt>digest_mass_range = 0.0 6500.0</tt> &nbsp; &nbsp; <i>search all spectra with peptide masses between 0.0 and 6000.0</i>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: fragment_bin_offset</h2>

         <ul>
         <li>This parameter controls how each fragment bin of size <a href="fragment_bin_tol.php">fragment_bin_tol</a>
         is defined in terms of where each bin starts.
         <li>For example, assume a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 1.0.  Most intuitively,
         the fragment bins would be 0.0 to 1.0, 1.0 to 2.0, 2.0 to 3.0, etc.
         This set of bins corresponds to a fragment_bin_offset of 0.0.  However,
         consider if we set fragment_bin_offset to 0.5; this would cause the
         bins to be 0.5 to 1.5, 1.5 to 2.5, 2.5 to 3.5, etc.
         <li>So this fragment_bin_offset gives one a mechanism to define
         where each bin starts and is centered.
         <li>For ion trap data with a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 1.0005,
         it is recommended to set fragment_bin_offset to 0.4.
         <li>For high-res MS/MS data, one might use a <a href="fragment_bin_tol.php">fragment_bin_tol</a> of 0.02
         and a corresponding fragment_bin_offset of 0.0.
         <li>Allowed values are between 0.0 and 1.0.  The actual offset value is
         scaled by the <a href="fragment_bin_tol.php">fragment_bin_tol</a> value.
         <li>I know this is esoteric and any normal user should not give this
         parameter any thought beyond using the recommended settings.
         <li>The default value is "0.4" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>fragment_bin_offset = 0.4</tt>
         <br><tt>fragment_bin_offset = 0.0</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: fragment_bin_tol</h2>

         <ul>
         <li>This parameter controls the bin size associated with fragment ions.
         <li>The bin size defines the mass width associated with a single MS/MS peak
         as it is stored internally in an array element.
         <li>Although it's not explicitly a fragment ion tolerance, it's probably
         easiest to think of it as such.
         <li>Note, there is a direct correlation between the value selected for
         the fragment_bin_tol and the memory used in a search.  The lower the
         fragment_bin_tol setting, the more memory a search will use.  A test of
         4,515 query spectra used ~700MB RAM with a 0.4 fragment_bin_tol value,
         ~1.5GB RAM with a 0.10 value, and ~9GB RAM with a 0.01 value.  For small
         fragment_bin_tol values where computer memory becomes an issue, either
         set <a href="use_sparse_matrix.php">use_sparse_matrix</a> to true and/or
         make use of the <a href="spectrum_batch_size.php">spectrum_batch_size</a>
         parameter
         <li>The minimum allowed value is 0.01.
         <li>The default value is "1.0005" if the parameter is missing.
         </ul>

         <p>Example:
         <br><tt>fragment_bin_tol = 1.0005</tt>
         <br><tt>fragment_bin_tol = 0.4</tt>
         <br><tt>fragment_bin_tol = 0.02</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: isotope_error</h2>

         <ul>
         <li>This parameter controls whether the <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a>
         takes into account possible isotope errors in the precursor mass measurement.
         <li>It is possible that an accurately read precursor mass is not measured on the monoisotopic
         peak of a precursor isotopic pattern. In these cases, the precursor mass is measured on the
         first isotope peak (one C13 atom) or possibly even the second or third isotope peak. To address
         this problem, this "isotope_error" parameter allows you to perform an accurate mass search
         (say 10 ppm) even if the precursor mass measurement is off by one or more C13 offsets.
         <li>Valid values are 0, 1, and 2:
            <ul>
            <li>0 performs no isotope error searches
            <li>1 searches -1, 0, +1, +2, and +3 isotope offsets
            <li>2 searches -8, -4, 0, +4, +8 isotope offsets (for +4/+8 stable isotope labeling)
            </ul>
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>isotope_error = 0</tt>
         <br><tt>isotope_error = 1</tt>
         <br><tt>isotope_error = 2</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: mass_type_fragment</h2>

         <ul>
         <li>Controls the mass type, average or monoisotopic, applied to fragment ion calculations.
         <li>Valid values are 0 or 1:
            <ul>
            <li>0 for average masses
            <li>1 for monoisotopic masses
            </ul>
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>mass_type_fragment = 0</tt>
         <br><tt>mass_type_fragment = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: mass_type_parent</h2>

         <ul>
         <li>Controls the mass type, average or monoisotopic, applied to peptide mass calculations.
         <li>Valid values are 0 or 1:
            <ul>
            <li>0 for average masses
            <li>1 for monoisotopic masses
            </ul>
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>mass_type_parent = 0</tt>
         <br><tt>mass_type_parent = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: max_fragment_charge</h2>

         <ul>
         <li>This parameter sets the maximum fragment charge state that will
         be considered in the analysis.
         <li>Typically, the fragment charge state range that is analyzed is
         from 1+ to one charge less than the precursor charge state.
         <li>For high precursor charge states (i.e. 6+), the default behavior
         would analyze fragment ions with 1+ through 5+ charges on them.  This
         parameter is a mechanism to limit the fragment charge range that is
         analyzed.
         <li>For example, if max_fragment_charge is set to 3 then the maximum
         fragment charge state that will be analyzed is 3+.  However, the default
         rule will still limit 1+ and 2+ precursor ions to only have 
         1+ fragments considered.  And similarly 3+ precursors will still only
         have 1+ and 2+ fragments considered.
         <li>Valid values are any non-zero integer.
         <li>The default value is "3" if this parameter is missing.  A maximum
         allowed value of "5" is enforced for this parameter.
         </ul>

         <p>Example:
         <br><tt>max_fragment_charge = 3</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: max_precursor_charge</h2>

         <ul>
         <li>This parameter defines the maximum precursor charge state that
         will be analyzed.
         <li>Only spectra with this number of precursor charges or less will be searched.
         <li>Valid values are any integer greater than 1.
         <li>The default value is "6" if this parameter is missing.  A maximum
         allowed value of "9" is enforced for this parameter.
         </ul>

         <p>Example:
         <br><tt>max_precursor_charge = 5</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: max_variable_mods_in_peptide</h2>

         <ul>
         <li>Specifies the total/maximum number of residues that can be modified in a peptide.
         <li>As opposed to specifying the maximum number of variable modifications for each
             of the 6 possible variable modifications, this entry limits the global number
             of variable mods possible in each peptide.
         <li>The default value is "10" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>max_variable_mods_in_peptide = 6</tt>
         <br><tt>max_variable_mods_in_peptide = 10</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: minimum_intensity</h2>

         <ul>
         <li>A floating point number indicating the minimum intensity value
         for input the input peaks.
         <li>If an experimental MS/MS peak intensity is less than this value,
         it will not be read in and used in the analysis.
         <li>This is one mechanism to get rid of systemmatic background noise
         that has a near contant peak intensity.
         <li>If a peak does not pass this minimum intensity threshold, it will
         also not be counted towards the <a href="minimum_peaks.php">minimum_peaks</a>
         parameter.
         <li>Valid values are any floating point number.
         <li>The default value is "0.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>minimum_intensity = 100.0</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: minimum_peaks</h2>

         <ul>
         <li>An integer value indicating the minimum number of m/z-intensity pairs
         that must be present in a spectrum before it is searched.
         <li>This parameter can be used to avoid searching nearly sparse spectra
         that will not likely yield an indentification.
         <li>This parameter is checked against the spectrum after
         <a href="clear_mz_range.php">clear_mz_range</a> is applied but before
         any other spectral processing occurs (i.e.  <a href="remove_precursor_peak.php">remove_precursor_peak</a>).
         <li>Valid values are any integer number.
         <li>The default value is "10" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>minimum_peaks = 10</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: ms_level</h2>

         <ul>
         <li>This parameter specifies which scans are searched.
         <li>An input value of 2 will search MS/MS scans.
         <li>An input value of 3 will search MS3 scans.
         <li>This parameter is only valid for mzXML, mzML, and mz5 input files.
         <li>Allowed values are 2 or 3.
         <li>The default value is "2" if this parameter is missing or any value
         other than 2 or 3 is entered.
         </ul>

         <p>Example:
         <br><tt>ms_level = 2</tt>
         <br><tt>ms_level = 3</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: nucleotide_reading_frame</h2>

         <ul>
         <li>This parameter is used to search nucleotide sequence databases.
         <li>It controls how the nucleotides are translated specifically
         which sets of reading frames are translated.
         <li>Valid values are 0 through 9.
         <li>Set this parameter to 0 for a protein sequence database.
         <li>Set this parameter to 1 to search the 1st forward reading frame.
         <li>Set this parameter to 2 to search the 2nd forward reading frame.
         <li>Set this parameter to 3 to search the 3rd forward reading frame.
         <li>Set this parameter to 4 to search the 1st reverse reading frame.
         <li>Set this parameter to 5 to search the 2nd reverse reading frame.
         <li>Set this parameter to 6 to search the 3rd reverse reading frame.
         <li>Set this parameter to 7 to search all 3 forward reading frames.
         <li>Set this parameter to 8 to search all 3 reverse reading frames.
         <li>Set this parameter to 9 to search all 6 reading frames.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>nucleotide_reading_frame = 0</tt>
         <br><tt>nucleotide_reading_frame = 9</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: num_enzyme_termini</h2>

         <ul>
         <li>This parameter specifies the number of enzyme termini a peptide must
         have.
         <li>For example, if trypsin were specified as the search enzyme, only 
         fully tryptic peptides would be analyzed if "num_enzyme_termini = 2"
         whereas semi-tryptic peptides would be analyzed if "num_enzyme_termini = 1".
         <li>This parameter is unused if a no-enzyme search is specified.
         <li>Valid values are 1, 2, 8, 9.
         <li>Set this parameter to 1 for a semi-enzyme search.
         <li>Set this parameter to 2 for a full-enzyme search.
         <li>Set this parameter to 8 for a semi-enzyme search, unspecific cleavage on peptide's N-terminus.
         <li>Set this parameter to 9 for a semi-enzyme search, unspecific cleavage on peptide's C-terminus.
         <li>The default value is "2" if this parameter is missing.
         </ul>


         <p>Example:
         <br><tt>num_enzyme_termini = 1</tt>
         <br><tt>num_enzyme_termini = 2</tt> 
         <br><tt>num_enzyme_termini = 8</tt> 
         <br><tt>num_enzyme_termini = 9</tt> 

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: num_output_lines</h2>

         <ul>
         <li>This parameter controls the number of search result
         hits (peptides) that are reported for each spectrum query.
         <li>If you are only interested in seeing one top hit each
         per query, set this value to 1.
         <li>This parameter value cannot be larger than the value
         entered for "<a href="num_results.php">num_results</a>"
         which itself is limited to a maximum value of 100.
         <li>Valid values are any positive integer 1 or greater.
         <li>If a value less than 1 is entered, this parameter is set to 1.
         <li>The default value is "10" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>num_output_lines = 1</tt>
         <br><tt>num_output_lines = 5</tt>
         <br><tt>num_output_lines = 10</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: num_results</h2>

         <ul>
         <li>This parameter controls the number of peptide search results that
         are stored internally.
         <li>Depending on what post-processing tools are used, one may want to
         set this to the same value as <a href="num_output_lines.php">num_output_lines</a>.
         <li>When this parameter is set to a value greater than
         <a href="num_output_lines.php">num_output_lines</a>, it allows
         the SpRank value to span a larger range which may be helpful for
         tools like PeptideProphet or Percolator (not likely though).
         <li>Valid values are any integer between 1 and 100.
         <li>The default value is "100" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>num_results = 50</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: num_threads</h2>

         <ul>
         <li>This parameter controls the number of processing threads that will be spawned for a search.
         Ideally the number of threads is set to the same value as the number of CPU cores available.
         <li>Valid values range for this parameter are numbers ranging from 0 to 64.
         <li>A value of 0 will cause Comet to poll the system and launch the same number of threads
         as CPU cores.
         <li>To set an explicit thread count, enter any value between 1 and 64.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>num_threads = 0</tt>
         <br><tt>num_threads = 8</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_outfiles</h2>

         <ul>
         <li>Controls whether to output search results as individual .out files.
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>output_outfiles = 0</tt>
         <br><tt>output_outfiles = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_pepxmlfile</h2>

         <ul>
         <li>Controls whether to output search results in a pepXML file.
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>output_pepxmlfile = 0</tt>
         <br><tt>output_pepxmlfile = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_percolatorfile</h2>

         <ul>
         <li>Controls whether to output search results in a <a href="http://per-colator.com">Percolator's</a>
         tab-delimited input format.
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "0" if this parameter is missing.
         <li>The created file will have a ".tsv" file extension.
         <li>This parameter replaces the now defunct "output_pinxmlfile".
         </ul>

         <p>Example:
         <br><tt>output_percolatorfile = 0</tt>
         <br><tt>output_percolatorfile = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_sqtfile</h2>

         <ul>
         <li>Controls whether to output search results into an SQT file (.sqt).
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>output_sqtfile = 0</tt>
         <br><tt>output_sqtfile = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_sqtstream</h2>

         <ul>
         <li>Controls whether to output search results to standard out
         (i.e. to the screen unless otherwise directed) in SQT format.
         <li>Just the search results (M and L lines and not any H lines)
         are output to standard out.
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>output_sqtstream = 0</tt>
         <br><tt>output_sqtstream = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_suffix</h2>

         <ul>
         <li>This parameter specifies the suffix string that is appended to
         the base output name for the pep.xml, pin.xml, txt and sqt output files.
         <li>Use this parameter to give output files a unique suffix base name.
         <li>For example, if the output_suffix parameter is set to
         "output_suffix = _000", then a search of the file base.mzXML
         will generate output files named base_000.pep.xml, base_000.pin.xml,
         base_000.txt, and/or base_000.sqt.
         <li>Note that using this parameter could break downstream tools that
         expect the output base name to be the same as the input file base name.
         <li>The default value is blank if this parameter is missing i.e.
         base.mzXML will generate base.pep.xml.
         </ul>

         <p>Example:
         <br><tt>output_suffix = </tt>
         <br><tt>output_suffix = _some_suffix</tt>
         <br><tt>output_suffix = any_string_you_want_without_spaces</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: output_txtfile</h2>

         <ul>
         <li>Controls whether to output search results into a tab-delimited text file (.txt).
         <li>Valid values are 0 (do not output) or 1 (output).
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>output_txtfile = 0</tt>
         <br><tt>output_txtfile = 1</tt>

         <p>Here's snippet of sample output below.  The first line of the output file is a
         header line which contains the Comet version, search start time/date, and search
         database.  The second line contains the column headers.

<pre>CometVersion 2015.01 rev. 0     BASE_NAME_OF_FILE_0000000       02/23/2015, 12:15:44 PM /net/database/path/YEAST.fasta.20141030
scan  num   charge   exp_neutral_mass  calc_neutral_mass e-value  xcorr delta_cn sp_score ions_matched   ions_total  plain_peptide  peptide  prev_aa  next_aa  protein  duplicate_protein_count
4  1  3  4916.768332 4917.845271 1.03E+01 0.8477   0.0015   31.8  10 164   NISMDDDDALNSPDMGQEYEGRDADDVVMMASSTNEELEELK   K.NISMDDDDALNSPDMGQEY[80.0]EGRDADDVVMMAS[80.0]ST[80.0]NEELEELK.K  K  K  sp|Q03954|SPC19_YEAST   0
6  1  2  3454.696629 3452.657825 1.78E+01 0.8366   0.0133   44.2  7  52 ENFVFLQYQYESRNAQPYLQFYHLNNK   K.ENFVFLQYQYESRNAQPYLQFYHLNNK.D  K  D  sp|Q06682|UBX5_YEAST 0
9  1  2  3081.173191 3079.219382 1.04E+00 0.9564   0.1603   33.3  7  48 TGGWIYSCNTRDMSGNPIMLEKGPR  R.T[80.0]GGWIY[80.0]S[80.0]CNTRDMSGNPIMLEKGPR.T R  T  sp|P40012|PPOX_YEAST 0
19 1  2  3481.657810 3478.707612 8.53E+00 0.7803   0.0457   14.0  4  50 TKYLNYYTPLVLLIFTVLFITYNIWK R.TKYLNYYTPLVLLIFT[80.0]VLFIT[80.0]Y[80.0]NIWK.H   R  H  sp|P32386|YBT1_YEAST 0
23 1  2  3277.656834 3274.649977 3.38E+00 0.9774   0.0012   28.2  8  64 LVAGGAAQNTARGAAYVLGAGQVVYFGSVGKDK   K.LVAGGAAQNTARGAAYVLGAGQVVY[80.0]FGSVGKDK.F  K  F  sp|P47143|ADK_YEAST  0
</pre></p>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: override_charge</h2>

         <ul>
         <li>This parameter specifies the whether to override existing precursor
         charge state information when present in the files with the charge
         range specified by the
         "<a href="precursor_charge.php">precursor_charge</a>" parameter.
         <li>Valid values are 0, 1, and 2:
            <ul>
            <li>0 = keep any known precursor charge state values in the input files
            <li>1 = ignore known precursor charge state values in the input files
                and instead use the charge state range specified by the
                "<a href="precursor_charge.php">precursor_charge</a>" parameter
            <li>2 = only search precursor charge state values that are within the
                range specified by the
                "<a href="precursor_charge.php">precursor_charge</a>" parameter
            </ul>
         </ul>

         <p>Example:
         <br><tt>override_charge = 0</tt>
         <br><tt>override_charge = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: peptide_mass_tolerance</h2>

         <ul>
         <li>This parameter controls the mass tolerance value.
         <li>The mass tolerance is set at +/- the specified number i.e. an entered value of "1.0" applies a -1.0 to +1.0 tolerance.
         <li>The units of the mass tolerance is controlled by the parameter "<a href="peptide_mass_units.php">peptide_mass_units</a>".
         <li>The default value is "1.0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>peptide_mass_tolerance = 3.0</tt>
         <br><tt>peptide_mass_tolerance = 10.0</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: peptide_mass_units</h2>

         <ul>
         <li>This parameter controls the units applied to the <a href="peptide_mass_tolerance.php">peptide_mass_tolerance</a> parameter.
         <li>Valid values are 0, 1, and 2.
         <li>Set this parameter to 0 for amu.
         <li>Set this parameter to 1 for mmu.
         <li>Set this parameter to 2 for ppm.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>peptide_mass_units = 0</tt>
         <br><tt>peptide_mass_units = 1</tt>
         <br><tt>peptide_mass_units = 2</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: precursor_charge</h2>

         <ul>
         <li>This parameter specifies the precursor charge range to search.
         <li>This parameter expects to integer values as input.
         <li>If the first input value is 0 then this parameter is ignored and all charge
         states are searched
         <li>Only in the case where a spectrum does not have a precursor charge will all charges
         in the specified charge range be searched.
         <li>If the first input value is not 0 then all charge states between (and inclusive of)
         the first and second input values are searched.  Again, only for those spectra with no
         specified precursor charge state.
         <li>If a precursor charge is present for a particular spectrum, this parameter will
         not override that charge state and that spectrum will always be searched.
         <li>With the default "0 0" values and a spectrum with no precursor charge, Comet will
         either search the spectrum as a 1+ or a 2+/3+.
         <li>The default value is "0 0" if this parameter is missing.

         </ul>

         <p>Example:
         <br><tt>precursor_charge = 0 0</tt> &nbsp; &nbsp; <i>search all charge ranges</i>
         <br><tt>precursor_charge = 0 2</tt> &nbsp; &nbsp; <i>search all charge ranges (because first entry is 0)</i>
         <br><tt>precursor_charge = 2 6</tt> &nbsp; &nbsp; <i>search 2+ to 6+ precursors</i>
         <br><tt>precursor_charge = 3 3</tt> &nbsp; &nbsp; <i>search 3+ precursors</i>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: print_expect_score</h2>

         <ul>
         <li>A boolean flag this determines whether or not the expectation
         score (E-value) is reported in .out and SQT formats.  Note that the
         E-value is always reported in pepXML output.
         <li>This parameter is only pertinant for results reported in .out and SQT formats.
         <li>If expect scores are chosen to be reported (i.e. value set to 1), they will replace
         the number reported for the traditional "spscore" i.e. "spscore" will
         be replaced by an E-value.  Also an expectation value histogram will
         be output at the end of each .out file; this histogram is not present
         for SQT output.
         <li>Valid values are 0 and 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>print_expect_score = 0</tt>
         <br><tt>print_expect_score = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: remove_precursor_peak</h2>

         <ul>
         <li>This parameter controls excluding/removing any precursor signals
         from the input MS/MS spectrum.
         <li>An input value of 0 will not perform any precursor removal.
         <li>An input value of 1 will remove all peaks around the precursor m/z.
         <li>An input value of 2 will remove all charge reduced precursor peaks
         as expected to be present for ETD/ECD spectra.
         <li>This parameter works in conjuction with
         <a href="remove_precursor_tolerance.php">remove_precursor_tolerance</a>
         to specify the tolerance around each precuror m/z that will be removed.
         <li>Valid values are 0, 1, and 2.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>remove_precursor_peak = 0</tt>
         <br><tt>remove_precursor_peak = 1</tt>
         <br><tt>remove_precursor_peak = 2</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: remove_precursor_tolerance</h2>

         <ul>
         <li>This parameter specifies the mass tolerance around each precursor m/z
         that would be removed when the <a href="remove_precursor_peak.php">remove_precursor_peak</a>
         option is invoked.
         <li>The mass tolerance units is in Da (or Th if you prefer).
         <li>Any non-negative, non-zero floating point number is valid.
         <li>The default value is "1.5" if this parameter is missing.
         </ul>

        <p>Example:
         <br><tt>remove_precursor_tolerance = 0.75</tt>
         <br><tt>remove_precursor_tolerance = 1.5</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: require_variable_mod</h2>

         <ul>
         <li>This parameter takes in one input value.
         <li>The input value is an integer that controls whether the analyzed peptides
             must contain at least one variable modification i.e. force all reported peptides
             to have a variable modifiation.
             <ul>
             <li>0 = consider both modified and unmodified peptides (default)
             <li>1 = analyze only peptides that contain a variable modification
             </ul>
         </ul>

         <p>Example:
         <br><tt>require_variable_mod = 0</tt> &nbsp; &nbsp; ... <i>modifications not required</i>
         <br><tt>require_variable_mod = 1</tt> &nbsp; &nbsp; ... <i>peptides must contain a variable modification</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: sample_enzyme_number</h2>

         <ul>
         <li>This parameter is relevant only for pepXML output i.e. when
         <a href="output_pepxmlfile.php">output_pepxmlfile</a> is set to 1.
         <li>The pepXML format encodes the enzyme that is applied to the sample
         i.e. trypsin.  This enzyme is written to the "sample_enzyme" element.
         <li>The sample enzyme could be different from the search enzyme i.e.
         the sample enzyme is "trypsin" yet the search enzyme is "No-enzyme"
         for a non-specific search.  Hence the need for this separate parameter.
         <li>Valid values are any integer represented in the enzyme list.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>sample_enzyme_number = 1</tt>
         <br><tt>sample_enzyme_number = 3</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: scan_range</h2>

         <ul>
         <li>Defines the scan range to search.  Only spectra within (and inclusive) of the specified
         scan range are searched.
         <li>This parameter works only with mzXML and mzML inputs files.
         <li>Two digits are specified for this parameter.  The first digit is the start scan and the
         second digit is the end scan.
         <li>As of now, it looks like the first digit must be an MS/MS scan.
         <li>When the start scan is set to 0, this parameter setting is ignored irrespective of what
         the end scan is set to.
         <li>When the end scan is less than the start scan, this parameter setting is ignored.
         <li>The default value is "0 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>scan_range = 0 0</tt> &nbsp; &nbsp; <i>search all scans</i>
         <br><tt>scan_range = 0 1000</tt> &nbsp; &nbsp; <i>search all scans (because first entry is 0)</i>
         <br><tt>scan_range = 1000 1500</tt> &nbsp; &nbsp; <i>search only scans 1000 to 1500</i>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: search_enzyme_number</h2>

         <ul>
         <li>The search enzyme is specified by this parameter.
         <li>The list of search enzymes is specified at the end of the comet.params file
         beginning with the line <tt>[COMET_ENZYME_INFO]</tt>.  The actual enzyme list and
         digestion parameters are read here.  So one can edit/add/delete enzyme definitions
         simply be changing the enzyme information.
         <li>This parameter works in conjection with the <a href="num_enzyme_termini.php">num_enzyme_termini</a>
         parameter to define the cleavage rule for fully-digested vs. semi-digested search options.
         <li>This parameter works in conjection with the <a href="allowed_missed_cleavage.php">allowed_missed_cleavage</a>
         parameter to define the miss cleavage rule.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>search_enzyme_number = 0</tt> &nbsp; &nbsp; <i>typically no-enzyme</i>
         <br><tt>search_enzyme_number = 1</tt> &nbsp; &nbsp; <i>typically trypsin</i></p>


         <li>The format of the parameter definition looks like the following:
         <p><pre>[COMET_ENZYME_INFO]
0.  No_enzyme              0      -           -
1.  Trypsin                1      KR          P
2.  Trypsin/P              1      KR          -
3.  Lys_C                  1      K           P
4.  Lys_N                  0      K           -
5.  Arg_C                  1      R           P
6.  Asp_N                  0      D           -
7.  CNBr                   1      M           -
8.  Glu_C                  1      DE          P
9.  PepsinA                1      FL          P
10. Chymotrypsin           1      FWYL        P</pre></p>

         <p>The first column of the parameter definition is the enzyme number. This number list
         must start from 0 and sequentially increase by 1.  The second column is the enzyme name;
         no spaces are allowed in this name field.  The third column is the digestion "sense"
         i.e. a value of "0" specifies cleavage N-teriminal to (before) the specified residues
         in column 4 and a value of "1" specifies cleavage C-terminal to (after) the specified
         residues in column 4.  Column 4 contains the residue(s) that the enzyme cleaves at.
         Column 5 contains the flanking residue(s) that negate cleavage.

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: show_fragment_ions</h2>

         <ul>
         <li>This parameter affects .out files only i.e.
         <a href="output_outfiles.php">output_outfiles</a> set to 1.
         <li>This parameter controls whether or not the theoretical
         fragment ion masses for the top peptide hit are calculated
         and dislayed at the end of an .out file.
         <li>Valid values are 0 and 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>show_fragment_ions = 0</tt>
         <br><tt>show_fragment_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: skip_researching</h2>

         <ul>
         <li>This parameter is valid only when <a href="output_outfiles.php">output_outfiles</a> is set
         to 1 and each of
         <a href="output_pepxmlfile.php">output_pepxmlfile</a>,
         <a href="output_sqtfile.php">output_sqtfile</a>, and
         <a href="output_sqtstream.php">output_sqtstream</a>  are set to 0.
         <li>When .out files only are set to be exported, this parameter will look to see if
         an .out file already exists for each query spectrum.  If so, it will not re-search
         that particular spectrum.
         <li>When set to 0, all spectra are re-searched.  When set to 1, the search is skipped
         for those spectra where an .out file already exists.
         <li>Valid values are 0 and 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>skip_researching = 0</tt>
         <br><tt>skip_researching = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: spectrum_batch_size</h2>

         <ul>
         <li>When this parameter is set to a non-zero value, say 5000, this causes Comet
         to load and search about 5000 spectra at a time, looping through sets of 5000
         spectra until all data have been analyzed.
         <li>This parameter was implemented to simplify searching large datasets that
         might not fit into memory if searched all at once.
         <li>The loaded batch sizes might be a little larger than the specified parameter
         value (i.e. 5014 spectra loaded when the parameter is set to 5000) due to both
         threading and potential charge state considerations when precursor charge state
         is not known.
         <li>Valid values are 0 or any positive integer.
         <li>Set this parameter to 0 to load and search all spectra at once.
         <li>Set this parameter to any other positive integer to loop through searching
         this number of spectra at a time until all spectra have been analyzed.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>spectrum_batch_size = 0</tt>
         <br><tt>spectrum_batch_size = 1000</tt>
         <br><tt>spectrum_batch_size = 5000</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: theoretical_fragment_ions</h2>

         <ul>
         <li>This parameter specifies how theoretical fragment ion peaks are
         represented.
         <li>Even though Comet does not generate/store a theoretical spectrum,
         it does calculate fragment ion masses and this parameter controls how
         the acquired spectrum intensities at these theoretical mass locations
         contribute to the correlation score.
         <li>A value of 0 indicates that the fast correlation score will be
         a sum of the intensities at each theortical fragment mass bin and half
         the intensity of each flanking bin.
         <li>A value of 1 indicates that the fast correlation score will be
         the sum of the intensities at each theoretical fragment mass bin.
         <li>For extremely coarse <a href="fragment_bin_tol.php">fragment_bin_tol</a>
         values such as the historical ~1 Da bins, a theoretical_fragment_ions
         value of 1 is optimal.
         <li>But for narrower bins, such as ~0.3 for ion trap data or ~0.03 for
         high-res MS/MS spectra, a value of 0 is optimal to incorporate
         intensities from the flanking bins.
         <li>Allowed values are 0 or 1.
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>theoretical_fragment_ions = 0</tt>
         <br><tt>theoretical_fragment_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_A_ions</h2>

         <ul>
         <li>Controls whether or not A-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use A-ions, set the value to 0.
         <li>To use A-ions, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_A_ions = 0</tt>
         <br><tt>use_A_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_B_ions</h2>

         <ul>
         <li>Controls whether or not B-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use B-ions, set the value to 0.
         <li>To use B-ions, set the value to 1.
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_B_ions = 0</tt>
         <br><tt>use_B_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_C_ions</h2>

         <ul>
         <li>Controls whether or not C-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use C-ions, set the value to 0.
         <li>To use C-ions, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_C_ions = 0</tt>
         <br><tt>use_C_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_NL_ions</h2>

         <ul>
         <li>Controls whether or not neutral loss ions (-NH3 and -H2O from b- and y-ions) are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use neutral loss ions, set the value to 0.
         <li>To use neutral loss ions, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_NL_ions = 0</tt>
         <br><tt>use_NL_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_sparse_matrix</h2>

         <ul>
         <li>Controls whether or not internal sparse matrix data representation is used.
         <li>The sparse matrix data representation will use a <em>significantly</em> smaller amount
         of memory/RAM for small <a href="fragment_bin_tol.php">fragment_bin_tol</a> settings such
         as 0.05 or 0.01.  We're talking going from tens of GB (gigabytes) down to a few hundred
         megabytes (MB)!
         <li>In this release, the sparse matrix searches will always be slower than the classical
         data representation (i.e. use_sparse_matrix = 0).  So it should be used only when
         memory is an issue.  Alternately, the <a href="spectrum_batch_size.php">spectrum_batch_size</a>
         parameter can also be used to mitigate memory issues.
         <li>Valid values are 0 and 1.
         <li>To not use sparse matrix, set the value to 0.
         <li>To use sparse matrix, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_sparse_matrix = 0</tt>
         <br><tt>use_sparse_matrix = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_X_ions</h2>

         <ul>
         <li>Controls whether or not X-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use X-ions, set the value to 0.
         <li>To use X-ions, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_X_ions = 0</tt>
         <br><tt>use_X_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_Y_ions</h2>

         <ul>
         <li>Controls whether or not Y-ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use Y-ions, set the value to 0.
         <li>To use Y-ions, set the value to 1.
         <li>The default value is "1" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_Y_ions = 0</tt>
         <br><tt>use_Y_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: use_Z_ions</h2>

         <ul>
         <li>Controls whether or not Z-dot ions are considered in the search.
         <li>Valid values are 0 and 1.
         <li>To not use Z-dot ions, set the value to 0.
         <li>To use Z-dot ions, set the value to 1.
         <li>The default value is "0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>use_Z_ions = 0</tt>
         <br><tt>use_Z_ions = 1</tt>

      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod01</h2>

         <ul>
         <li>This parameter specifies the 1st of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '*' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod01 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod01 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod01 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod01 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod01 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod01 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod01 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod01 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod02</h2>

         <ul>
         <li>This parameter specifies the 2nd of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '#' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod02 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod02 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod02 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod02 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod02 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod02 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod02 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod02 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod03</h2>

         <ul>
         <li>This parameter specifies the 3rd of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '@' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod03 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod03 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod03 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod03 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod03 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod03 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod03 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod03 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod04</h2>

         <ul>
         <li>This parameter specifies the 4th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '^' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod04 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod04 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod04 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod04 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod04 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod04 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod04 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod04 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod05</h2>

         <ul>
         <li>This parameter specifies the 5th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '~' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod05 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod05 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod05 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod05 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod05 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod05 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod05 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod05 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod06</h2>

         <ul>
         <li>This parameter specifies the 6th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '$' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod06 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod06 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod06 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod06 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod06 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod06 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod06 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod06 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod07</h2>

         <ul>
         <li>This parameter specifies the 7th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '%' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod07 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod07 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod07 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod07 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod07 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod07 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod07 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod07 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod08</h2>

         <ul>
         <li>This parameter specifies the 8th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '!' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod08 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod08 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod08 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod08 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod08 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod08 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod08 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod08 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div id="content_full">
      <div class="post hr">

         <h2>Comet parameter: variable_mod09</h2>

         <ul>
         <li>This parameter specifies the 9th of 9 variable modifications.
         <li>There are 7 entries/settings that are associated with this parameter:
            <ul>
            <li>The first entry is a decimal value specifying the modification mass difference.
            <li>The second entry is the residue(s) that the modifications are possibly applied to.
                If more than a single residue is modified by the same mass difference, list them
                all as a string.  Use 'n' for N-terminal modfication and 'c' for C-terminal modification.
            <li>The third entry is a integer 0 or 1 to specify whether the modification is a
                variable modification (0) or a binary modification (1).
                <ul>
                <li>0 = variable modification analyzes all permutations of modified and unmodified
                    residues.
                <li>1 = A binary modification analyzes peptides where all residues are either
                    modified or all residues are not modified.
                </ul>
            <li>The fourth entry is an integer specifying the maximum number of modified residues
                possible in a peptide for this modification entry.
            <li>The fifth entry specifies the distance the modification is applied to from the
                respective protein terminus:
                <ul>
                <li>-1 = no distance contraint
                <li>0 = only applies to terminal residue
                <li>1 = only applies to terminal residue and next residue
                <li>2 = only applies to terminal residue through next 2 residues
                <li><i>N</i> = only applies to terminal residue through next <i>N</i> residues where <i>N</i> is a positive integer
                </ul>
            <li>The sixth entry specifies whichprotein terminus the distance constraint is applied to:
                <ul>
                <li>0 = protein N-terminus
                <li>1 = protein C-terminus
                <li>2 = peptide N-terminus
                <li>3 = peptide C-terminus
                </ul>
            <li>The seventh entry specifies whether peptides are must contain this modification
                <ul>
                <li>0 = not forced to be present
                <li>1 = modification is required 
                </ul>

            </ul>
         <li>In the output, this first modification is encoded with the character '+' in the peptide string.
         <li>The default value is "0.0 null 0 4 -1 0" if this parameter is missing.
         </ul>

         <p>Example:
         <br><tt>variable_mod09 = 15.9949 M 0 3 -1 0 0</tt>
         <br><tt>variable_mod09 = 79.966331 STY 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>possible phosphorylation on any S, T, Y residue</i>
         <br><tt>variable_mod09 = 79.966331 STY 0 3 -1 0 1</tt> &nbsp; &nbsp; ... <i>force peptide IDs to contain at least one phosphorylation mod</i>
         <br><tt>variable_mod09 = 42.010565 nK 0 3 -1 0 0</tt> &nbsp; &nbsp; ... <i>acetylation mod to lysine and N-terminus of all peptides</i>
         <br><tt>variable_mod09 = 15.994915 n 0 3 0 0 0</tt> &nbsp; &nbsp; ... <i>oxidation of protein's N-terminus</i>
         <br><tt>variable_mod09 = 28.0 c 0 3 8 1 0</tt> &nbsp; &nbsp; ... <i>modification applied to C-terminus as lon as the C-term residue is one of last 9 residues in protein</i>
         <br><tt>variable_mod09 = -17.026549 Q 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamine to form pyroglutamic acid (elimination of NH3)</i>
         <br><tt>variable_mod09 = -18.010565 E 0 1 0 2 0</tt> &nbsp; &nbsp; ... <i>cyclization of N-terminal glutamic acid to form pyroglutamic acid (elimination of H2O)</i>


      </div>
   </div>
   <div style="clear: both;">&nbsp;</div>
</div>

<?php include "footer.php" ; ?>
</html>
