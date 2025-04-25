import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';
import { Prediction } from '@/types';
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from "@/components/ui/table"

export default function CustomerIndex({ predictions }: { predictions: Prediction[] }) {
    return (
        <AppLayout>
            <Head title="Voorspellingen overzicht" />
            <div className="min-h-screen bg-[url('/images/background.jpg')] bg-cover bg-center flex items-center justify-center py-12 px-4 sm:px-6">
                <div className="max-w-4xl w-full">
                    <div className="bg-white/90 backdrop-blur-sm shadow-md rounded-lg p-8">
                        <h2 className="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Alle Koningsdag Voorspellingen
                        </h2>

                        <div className="mt-12 mb-8">
                            <img src="/storage/NCFS.jpg" alt="NCFS Logo" className="mx-auto h-12 w-auto mb-4" />
                            <p className="text-center text-gray-600 mb-4 italic">
                                De helft van de opbrengst gaat naar het Nederlandse Cystic Fibrosis Stichting (NCFS).
                            </p>
                        </div>

                        <Table className={'mt-4'}>
                            <TableHeader>
                                <TableRow>
                                    <TableHead>Voorspelling (gram)</TableHead>
                                    <TableHead>Naam</TableHead>
                                    <TableHead>Status</TableHead>
                                </TableRow>
                            </TableHeader>
                            <TableBody>
                                {predictions.map((prediction) => (
                                    <TableRow key={prediction.id}>
                                        <TableCell>{prediction.prediction}</TableCell>
                                        <TableCell>{prediction.user.name}</TableCell>
                                        <TableCell className={prediction.is_payed ? 'text-green-600' : 'text-red-700'}>
                                            {prediction.is_payed ? 'Betaald' : 'Niet betaald'}
                                        </TableCell>
                                    </TableRow>
                                ))}
                            </TableBody>
                        </Table>

                        <div className="mt-8 text-center">
                            <a href={route('home')}
                                className="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                Terug naar voorspelling maken
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}
