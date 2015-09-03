---
title: Storing image in SQL database using RIA
date: 2010/06/01 17:44:34
taxonomy: 
 category: blog 
---

Our recent project calls for the uploading of images from local storage for storing remotely on a SQL server instance that we manage via RIA services. Here’s how we do it.


<Image Grid.Column="1" Grid.Row="3" Height="150" HorizontalAlignment="Left" Margin="3" Name="pictureImage"
Source="{Binding Path=Picture, Converter={StaticResource ByteArrayToBitMapConverter}}" Stretch="Fill" VerticalAlignment="Center" Width="200" />

The _Image _control above is bound to the _Picture_ property of the _Author_ class (a proxy for the _Author_ table in the database). The _Image_ control is actually in a _Grid_ whose _DataContext_ is bound to a parent data grid’s _SelectedItem_. The Converter used is to create a _BitmapImage_ object from the _byte array _returned from the database:

 


public object Convert(object value, Type targetType, object parameter, System.Globalization.CultureInfo culture)
{
var binaryData = (byte[])value;

if (binaryData == null)
{
return null;
}

BitmapImage bitmap = null;

if (IsJpegOrPngImage(binaryData))
{
Stream stream = null;

try
{
stream = new MemoryStream(binaryData);
bitmap = new BitmapImage();
bitmap.SetSource(stream);
}
catch (Exception)
{
bitmap = null;
}
finally
{
if (stream != null)
{
stream.Dispose();
}
}
}

return bitmap;
}

private static bool IsJpegOrPngImage(byte[] binaryData)
{
if (binaryData.Length > 2)
{
if (binaryData[0].Equals(0XFF) && binaryData[1].Equals(0XD8))
{
return true;
}

if (binaryData[0].Equals(0X89) && binaryData[1].Equals(0X50))
{
return true;
}
}

return false;
}

Now for how to get the image file into the database in the first place. There is a _Load_ button on the UI that polls the user to choose an image file:


private void Load_Image_Click(object sender, RoutedEventArgs e)
{
var dialog = new OpenFileDialog
{
Filter = "Image files(*.jpg;*.jpeg;*.png)|*.jpg;*.jpeg;*.png|All Files (*.*)|*.*"
,
FilterIndex = 1
};

if (dialog.ShowDialog() == true)
{
using (Stream fileStream = dialog.File.OpenRead())
{
System.IO.Stream stream = dialog.File.OpenRead();
byte[] bitArray = new byte[stream.Length];
stream.Read(bitArray, 0, bitArray.Length);

// pick the current record from the datagrid (or CurrentItem of DataForm is using that)
var rec = authorDataGrid.SelectedItem as Author;
rec.Picture = bitArray;
stream.Close();
};
}
}

The file identified is opened as a _FileStream_ and a (suitably-sized) byte array created to hold the data read from the stream. The bound record is called up from the parent _DataGrid_ and cast appropriately. The _byte[]_ is then assigned to the _Picture_ field of that record. Thanks to binding, the UI control (i.e. Image control) that is bound to that property is notified and you’ll see the update on-screen.

