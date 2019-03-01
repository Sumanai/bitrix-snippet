const vscode = require('vscode');
const path = require('path');

/**
 * @param {vscode.ExtensionContext} context
 */
function activate(context) {
	//console.log('activate');

	let hint_function = vscode.workspace.getConfiguration("bitrix-snippet").get("hint-function", false);

	if (hint_function) {
		const p = path.join(__dirname, 'bitrix-stubs');
		const folder = vscode.Uri.file(p);
		folder.scheme === 'file';
		vscode.workspace.updateWorkspaceFolders(
			vscode.workspace.workspaceFolders ? vscode.workspace.workspaceFolders.length : 0,
			null,
			{
				uri: folder,
				name: 'bitrix-stubs'
			}
		);
	}
}

function deactivate() {
	//console.log('deactivate');
}

module.exports = {
	activate,
	deactivate
}
