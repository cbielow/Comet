﻿using System;
using System.Drawing;
using System.Windows.Forms;
using CometUI.Properties;
using CometUI.Search;
using CometUI.Search.SearchSettings;
using CometUI.ViewResults;

namespace CometUI
{
    public partial class CometUI : Form
    {
        public static SearchSettings SearchSettings { get; set; }
        public static RunSearchSettings RunSearchSettings { get; set; }
        public static ViewResultsSettings ViewResultsSettings { get; set; }

        private SearchSettingsDlg _searchSettingsDlg;
        private SearchSettingsDlg SearchSettingsDlg
        {
            get { return _searchSettingsDlg ?? (_searchSettingsDlg = new SearchSettingsDlg()); }
        }

        private ViewSearchResultsControl ViewSearchResultsControl { get; set; }

        public CometUI()
        {
            InitializeComponent();

            SearchSettings = SearchSettings.Default;

            RunSearchSettings = RunSearchSettings.Default;

            ViewResultsSettings = ViewResultsSettings.Default;

            ViewSearchResultsControl = new ViewSearchResultsControl(this)
            {
                Anchor = (AnchorStyles.Top | AnchorStyles.Bottom | AnchorStyles.Left | AnchorStyles.Right),
                Location = new Point(10, 5)
            };

            viewSearchResultsPanel.Controls.Add(ViewSearchResultsControl);
        }

        public static string ShowOpenPepXMLFile()
        {
            const string filter = "PepXML file (*.pep.xml)|*.pep.xml";
            var fdlg = new OpenFileDialog
            {
                Title = Resources.CometUI_ShowOpenPepXMLFile_Open_PepXML_File,
                InitialDirectory = @".",
                Filter = filter,
                FilterIndex = 1,
                Multiselect = false,
                RestoreDirectory = true
            };

            if (fdlg.ShowDialog() == DialogResult.OK)
            {
                return fdlg.FileName;
            }

            return null;
        }

        private void SearchSettingsToolStripMenuItemClick(object sender, EventArgs e)
        {
            if (DialogResult.OK == SearchSettingsDlg.ShowDialog())
            {
                // Todo: do we need to do something here?
            }
        }

        private void RunSearchToolStripMenuItemClick(object sender, EventArgs e)
        {
            var runSearchDlg = new RunSearchDlg(this);
            if (DialogResult.OK == runSearchDlg.ShowDialog())
            {
                var cometSearch = new CometSearch(runSearchDlg.InputFiles);
                var runSearchWorker = new RunSearchBackgroundWorker(cometSearch);
                runSearchWorker.DoWork();
            }
        }

        private void CometUIFormClosing(object sender, FormClosingEventArgs e)
        {
            if (SearchSettingsDlg.SettingsChanged)
            {
                if (MessageBox.Show(Resources.CometUI_CometUIFormClosing_You_have_modified_the_search_settings__Would_you_like_to_save_the_changes_before_you_exit_, 
                    Resources.CometUI_CometUIFormClosing_Search_Settings_Changed, 
                    MessageBoxButtons.YesNo, MessageBoxIcon.Warning) == DialogResult.Yes)
                {
                    SearchSettingsDlg.SaveSearchSettings();
                }
            }

            if (ViewSearchResultsControl.SettingsChanged)
            {
                if (MessageBox.Show(
                    Resources.CometUI_CometUIFormClosing_You_have_modified_the_view_results_settings__Would_you_like_to_save_the_changes_before_you_exit_,
                    Resources.CometUI_CometUIFormClosing_View_Results_Settings_Changed,
                    MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
                {
                    ViewSearchResultsControl.SaveViewResultsSettings();
                }
            }
        }

        private void ExitToolStripMenuItemClick(object sender, EventArgs e)
        {
            Close();
        }

        private void SaveSearchSettingsToolStripMenuItemClick(object sender, EventArgs e)
        {
            if (MessageBox.Show(Resources.CometUI_SaveSearchSettingsToolStripMenuItemClick_Are_you_sure_you_want_to_overwrite_the_current_settings_,
                    Resources.CometUI_SaveSearchSettingsToolStripMenuItemClick_Save_Search_Settings,
                    MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
            {
                SearchSettingsDlg.SaveSearchSettings();
            }
        }

        private void SearchSettingsImportToolStripMenuItemClick(object sender, EventArgs e)
        {
            var importParamsDlg = new ImportSearchParamsDlg();
            importParamsDlg.ShowDialog();
        }

        private void SearchSettingsExportToolStripMenuItemClick(object sender, EventArgs e)
        {
            var exportParamsDlg = new ExportParamsDlg();
            if (DialogResult.OK == exportParamsDlg.ShowDialog())
            {
                MessageBox.Show(Resources.ExportParamsDlg_BtnExportClick_Settings_exported_to_ + exportParamsDlg.FilePath,
                Resources.ExportParamsDlg_BtnExportClick_Export_Search_Settings, MessageBoxButtons.OK,
                MessageBoxIcon.Information);
            }
        }

        private void HelpAboutToolStripMenuItemClick(object sender, EventArgs e)
        {
            var aboutDlg = new AboutDlg();
            aboutDlg.ShowDialog();
        }

        private void OpenToolStripMenuItemClick(object sender, EventArgs e)
        {
            ViewSearchResultsControl.UpdateViewSearchResults(ShowOpenPepXMLFile());
        }

        private void ViewResultsSettingsToolStripMenuItemClick(object sender, EventArgs e)
        {
            if (MessageBox.Show(Resources.CometUI_ViewResultsSettingsToolStripMenuItemClick_Are_you_sure_you_want_to_overwrite_the_current_settings_, 
                Resources.CometUI_ViewResultsSettingsToolStripMenuItemClick_Save_View_Results_Settings,
                MessageBoxButtons.OKCancel, MessageBoxIcon.Warning) == DialogResult.OK)
            {
                ViewSearchResultsControl.SaveViewResultsSettings();
            }
        }
    }
}
